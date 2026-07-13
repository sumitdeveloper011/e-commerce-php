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
    
    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    public function formattedPrice(): string
    {
        return "₹" . number_format($this->price, 2);
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setStock($stock)
    {
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

    public function updatePrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function sell($quantity)
    {
        $this->stock -= $quantity;
    }
}