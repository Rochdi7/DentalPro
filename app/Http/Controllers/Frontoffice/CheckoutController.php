<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontoffice.checkout.index');
    }
}
