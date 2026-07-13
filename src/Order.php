<?php 

class Order
{
    private int $orderId;
    public string $status;
    private float $totalAmount;

    public function __construct(
        int $orderId,
        string $status,
        float $totalAmount
    ) {
        $this->orderId = $orderId;
        $this->status = $status;
        $this->totalAmount = $totalAmount;
    }

    public function __destruct()
    {
        echo "Order object destroyed.<br>";
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount($amount)
    {
        if ($amount <= 0) {
            return false;
        }

        $this->totalAmount = $amount;

        return true;
    }

    public function calculateTotal()
    {
        echo "Order ID: " . $this->orderId . "<br>";
        echo "Total: ₹" . $this->totalAmount . "<br>";
    }

    public function cancel()
    {

    }

    public function generateInvoice()
    {

    }
}
