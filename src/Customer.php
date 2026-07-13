<?php 
class Customer
{
    public string $name;
    public string $email;
    public string $phone;

    public function __construct(
        string $name,
        string $email,
        string $phone
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function __destruct()
    {
        echo "Customer object destroyed.<br>";
    }

    public function register()
    {
        echo "Customer: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function login()
    {

    }

    public function placeOrder()
    {

    }
}
