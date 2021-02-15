<?php

namespace Acme;

interface PaymentMethodInterface {
    public function acceptPayment($receipt);
}

class BitCoinPaymentMethod implements PaymentMethodInterface {

    public function acceptPayment($receipt)
    {
        // Code
    }
}

class Checkout {

    public function begin(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment($receipt);
    }

}
