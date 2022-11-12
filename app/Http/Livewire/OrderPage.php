<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class OrderPage extends Component
{
    use LivewireAlert;
    public $productId, $price, $quantity, $successMessage, $totalQuantity, $totalPrice;
    public function mount()
    {
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
        $this->totalPrice = 0;
        if (session()->has('cart')) {
            foreach (session()->get('cart') as $item) {
                $this->totalPrice += $item['price'] * $item['quantity'];
            }
        }
        return view('livewire.order-page', [
            'totalQuantity' => $this->totalQuantity,
            'totalPrice' => $this->totalPrice,
            'products' => $products,
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
        //get all product from session
        $cart = session()->get('cart');
        //get customer from session
        $customer = session()->get('customer');
        //transform cart session to array and store to database
        foreach($cart as $item){
            $cart[] = [
                'name' => $item['name'],
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ];
        }
        //insert to database
        $order = Order::create([
            'id' => random_int(1000000000, 9999999999),
            'user_id' => '1',
            'order_number' => random_int(100000, 999999),
            'email' => $customer['email'],
            'name' => $customer['name'],
            'table_number' => $customer['table_number'],
            'type' => $customer['type'],
            'status' => 'pending',
            'total_price' => $this->totalPrice,
        ]);
        //get order_id from order
        foreach($cart as $item){
            $order_items = [
                'order_id' => '3421983',
                'product_id' => $item['product_id'],
                'name' => $item['name'],
                'description' => random_int(100000, 999999),
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ];
        }
        //store to order_items
        OrderItem::create($order_items);
        //clear session
        session()->forget('cart');
        $this->alert('success', 'Order has been placed successfully!');
    }

    public function removeFromCart($index)
    {
        //remove product from session
        session()->forget('cart.' . $index);
        $this->successMessage = 'Product berhasil dihapus';
    }
}
