<?php

namespace Acme;

class Checkout {

    public function begin(Receipt $receipt)
    {
        $this->acceptCash($receipt);
    }

    public function acceptCash($receipt)
    {
        //Accept the cash
    }


    // What about if I need CC, PayPal?
}
