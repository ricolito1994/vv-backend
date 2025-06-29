<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function getPayments () 
    {
        return response() -> json ([
            "response" => "payment"
        ]);
    }

    public function show (int $paymentId) 
    {
        return response() -> json ([
            "response" => "payment ". $paymentId
        ]);
    }
}
