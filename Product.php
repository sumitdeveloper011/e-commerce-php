class Product
{
    public string $name;
    public float $price;
    public int $stock;

    public function showDetails()
    {
        echo "Product: " . $this->name . "<br>";
        echo "Price: ₹" . $this->price . "<br>";
        echo "Stock: " . $this->stock . "<br>";
    }

    public function updateStock()
    {

    }

    public function applyDiscount()
    {

    }
}

$product = new Product();