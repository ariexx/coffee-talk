<?php

namespace App\Http\Controllers;

use App\Models\Product;
use URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class OrderController extends Controller
{
	public function index()
	{
        return view('order.index');
	}

    public function confirmation()
    {
        return view('order.confirmation');
    }

    public function addProductToCart($productId)
    {
        //find product by id
        $product = Product::findOrFail($productId);
        //store all product from user to session with unique key
        session()->push('cart', [
            'name' => $product->name,
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->discount_price,
        ]);
        //redirect to order page
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
