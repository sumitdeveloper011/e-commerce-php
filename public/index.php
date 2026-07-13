<?php

require '../src/Product.php';
require '../src/Order.php';
require '../src/Customer.php';

$product = new Product("MacBook Pro", 220000, 15);

$customer = new Customer(
    "Ajay",
    "ajay@example.com",
    "9876543210"
);

$order = new Order(
    1001,
    "Pending",
    220000
);

$product->showDetails();
