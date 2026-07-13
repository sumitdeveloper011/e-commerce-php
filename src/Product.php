<?php 
class Product
{
    public string $name;
    private float $price;
    private int $stock;

    public function __construct(
        string $name, 
        float $price, 
        int $stock
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function __destruct()
    {
        echo "Product object destroyed.<br>";
    }
    
    public function getPrice(){
        return $this->price;
    }

    public function getStock(){
        return $this->stock;
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

    public function updatePrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function sell($quantity)
    {
        $this->stock -= $quantity;
    }
}