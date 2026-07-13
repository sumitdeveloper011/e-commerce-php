<?php 

class Order
{
    public int $orderId;
    public string $status;
    public float $total;

    public function __construct(
        int $orderId,
        string $status,
        float $total
    ) {
        $this->orderId = $orderId;
        $this->status = $status;
        $this->total = $total;
    }

    public function __destruct()
    {
        echo "Order object destroyed.<br>";
    }

    public function calculateTotal()
    {
        echo "Order ID: " . $this->orderId . "<br>";
        echo "Total: ₹" . $this->total . "<br>";
    }

    public function cancel()
    {

    }

    public function generateInvoice()
    {

    }
}
