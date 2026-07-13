class Customer
{
    public string $name;
    public string $email;
    public string $phone;

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

$customer = new Customer();