<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderPage extends Component
{
    public $productId, $price, $quantity, $successMessage;
    public function render()
    {
        //sum all quantity from session
        $totalQuantity = 0;
        if (session()->has('cart')) {
            foreach (session()->get('cart') as $item) {
                $totalQuantity += $item['quantity'];
            }
        }
        //sum all price from session
        $totalPrice = 0;
        if (session()->has('cart')) {
            foreach (session()->get('cart') as $item) {
                $totalPrice += $item['price'] * $item['quantity'];
            }
        }
        return view('livewire.order-page', [
            'totalQuantity' => $totalQuantity,
            'totalPrice' => $totalPrice,
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
    }
}
