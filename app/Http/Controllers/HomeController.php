<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function promo($id)
    {
        return view('promotion.promo', [
            'ad' => \App\Models\Ad::findOrFail($id),
            'anotherAds' => \App\Models\Ad::where('type', 'promo')->where('id', '!=', $id)->get(),
            ]);
    }
}
