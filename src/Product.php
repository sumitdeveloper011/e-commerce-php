<?php 
class Product
{
    public string $name;
    public float $price;
    public int $stock;

    public function __construct(
        string $name, 
        float $price, 
        int $stock
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
    
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