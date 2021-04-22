<?php

namespace App\Http\Controllers;

use App\Orders\OrderDetails;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway)
    {
        /* Ao invés de atribuir como " $paymentGateway = new PaymentGateway($currency); ",
        ** Foi aplicado dependencia via service provider em app/Providers/AppServiceProvider.php
        */
        $order = $orderDetails->all();
        
        dd( $paymentGateway, $paymentGateway->charge(1010) );
    }
}
