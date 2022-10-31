<?php

namespace App\Http\Controllers;

use URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class OrderController extends Controller
{
	public function index()
	{
		$generateUrl = URL::temporarySignedRoute('order', now()->addMinutes(30));
        //generate QRCode
        $qrCode = QrCode::generate($generateUrl);
        return view('Order.index', compact('qrCode'));
	}

    public function order()
    {
        return view('Order.order');
    }
}
