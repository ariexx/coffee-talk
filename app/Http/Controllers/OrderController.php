<?php

namespace App\Http\Controllers;

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
}
