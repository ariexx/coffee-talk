<?php

namespace App\Http\Livewire;

use App\Helpers\GenerateQr;
use App\Mail\SendInvoices;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class OrderPage extends Component
{
    use LivewireAlert;

    public $productId, $price, $quantity, $successMessage, $totalQuantity, $totalPrice, $qrCode = null;

    /**
     * @return mixed
     */
    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @throws \Exception
     */
    public function getTotalPrice(): mixed
    {
        return $this->totalPrice; //for unique identifier
    }

    public function render()
    {
        $products = Product::all();
        //sum all quantity from session
        $this->totalQuantity = 0;
        if (session()->has('cart')) {
            foreach (session()->get('cart') as $item) {
                $this->totalQuantity += $item['quantity'];
            }
        }
        //sum all price from session
        $this->setTotalPrice(0);
        if (session()->has('cart')) {
            foreach (session()->get('cart') as $item) {
                $this->setTotalPrice($this->getTotalPrice() + $item['price'] * $item['quantity']);
            }
        }
        return view('livewire.order-page', [
            'totalQuantity' => $this->totalQuantity,
            'totalPrice' => $this->getTotalPrice(),
            'products' => $products,
            'qrCode' => session()->get('qrCode'),
        ]);
    }

    public function addToCart($id)
    {
        //find product by id
        $product = Product::findOrFail($id);
        //store all product from user to session with unique key
        session()->push('cart', [
            'name' => $product->name,
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->price,
        ]);

        //emit session for generate qr code
        //        $this->emit('generateQr', $this->totalPrice);
    }

    public function checkout()
    {
        $cart = session()->get('cart');
        $customer = session()->get('customer');

        $cart_item = [];
        foreach ($cart as $item) {
            $cart_item[] = [
                'name' => $item['name'],
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ];
        }

        if (empty($cart)) {
            return $this->alert('error', 'Please add product to cart first');
        }

        //prevent user to checkout without adding customer data
        if (empty($customer)) {
            return $this->alert('error', 'Please add customer data first');
        }

        //insert to database
        $order = Order::create([
            'id' => random_int(1000000000, 9999999999),
            'order_number' => random_int(100000, 999999),
            'email' => $customer['email'],
            'name' => $customer['name'],
            'table_number' => $customer['table_number'],
            'type' => $customer['type'],
            'status' => 'pending',
            'total_price' => $this->getTotalPrice(),
        ]);
        //loop cart_item for insert to database
        foreach ($cart_item as $item) {
            OrderItem::create([
                'order_number' => $order->order_number,
                'product_id' => $item['product_id'],
                'name' => $item['name'],
                'description' => 'description',
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        $generatedQrCode = $this->qrCode = GenerateQr::create($this->getTotalPrice());

        session()->put('qrCode', $generatedQrCode);

        Mail::to($customer['email'])->send(new SendInvoices($cart_item, $customer, $this->getTotalPrice(), $order->order_number, $generatedQrCode));

        //clear session
        session()->forget('cart');
        session()->forget('customer');
        $this->alert('success', 'Order has been placed successfully!');
    }

    public function removeFromCart($index)
    {
        //remove product from session
        session()->forget('cart.' . $index);
        $this->successMessage = 'Product berhasil dihapus';
    }
}
