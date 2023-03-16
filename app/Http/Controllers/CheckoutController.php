<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Checkout;

class CheckoutController extends Controller
{
    use Checkout;

    public function checkout(Request $request)
    {       
        $total = $this->total($request['items']);
        
        return response()->json($total);
    }
}
