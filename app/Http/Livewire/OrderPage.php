<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderPage extends Component
{
    public $productId, $price, $quantity, $successMessage, $totalQuantity, $totalPrice;
    protected $listeners = ['generateQrCode' => 'generateQrCode'];
    public function render()
    {
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
        ]);
    }

    public function addToCart()
    {
        //store all product from user to session with unique key
        session()->push('cart', [
            'product_id' => random_int(1, 100),
            'quantity' => 1,
            'price' => 10000,
        ]);

        //emit session for generate qr code
        $this->emit('generateQrCode', session()->get('cart'));
    }
}
