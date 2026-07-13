class Order
{
    public int $orderId;
    public string $status;
    public float $total;

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

$order = new Order();