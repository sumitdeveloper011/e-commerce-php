<?php
require_once 'Payment.php';

class CardPayment implements Payment
{
    public function pay(float $amount): bool
    {
        echo "Payment of ₹{$amount} processed using Credit Card.";

        return true;
    }
}