<?php 
class Person
{
    protected string $name;
    protected string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }// Empty parent class for now

    public function introduce() : void
    {
        echo "Hello, I am customer {$this->name}.";
    }
}

class Customer extends Person
{
    private $password;
    public string $phone;

    public function __construct(
        string $name,
        string $email,
        string $password,
        string $phone
    ) {
        parent::__construct($name, $email);
        $this->password = $password;
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

    public function introduce() : void
    {
        parent::introduce();

        echo PHP_EOL;
        echo "I am a valued customer.";
    }
}
