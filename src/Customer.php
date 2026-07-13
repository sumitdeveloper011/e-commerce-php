<?php 
class Person
{
    protected string $name;
    protected string $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }// Empty parent class for now
}

class Customer extends Person
{
    private $password;
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

    // Write Only
    public function setPassword($password)
    {
        // Later:
        // $this->password = password_hash($password, PASSWORD_DEFAULT);

        $this->password = $password;
    }

    public function login()
    {

    }

    public function placeOrder()
    {

    }
}
