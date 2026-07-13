# Mini E-Commerce Inventory & Order Management System

A learning project built while mastering Object-Oriented Programming (OOP) in PHP.

The goal of this project is to gradually build a production-style e-commerce inventory and order management system while learning PHP OOP concepts from beginner to senior level.

---

# Project Status

**Current Version:** v0.5

**Current Phase:** OOP Fundamentals (Chat 1)

---

# Features Completed

## ✅ OOP Fundamentals

### Classes

- Product
- Customer
- Order

### Objects

- Product objects
- Customer objects
- Order objects

### Properties

#### Product

- name
- price
- stock

#### Customer

- name
- email
- phone

#### Order

- orderId
- status
- total

### Methods

#### Product

- showDetails()
- updateStock()
- applyDiscount()

#### Customer

- register()
- login()
- placeOrder()

#### Order

- calculateTotal()
- cancel()
- generateInvoice()

### `$this`

- Access object properties
- Access current object context
- Implement object-specific behavior

---

# Folder Structure

```
mini-ecommerce/
│
├── Product.php
├── Customer.php
├── Order.php
├── index.php
└── README.md
```

---

# Concepts Covered

- ✅ Why OOP Exists
- ✅ What is OOP
- ✅ Procedural vs OOP
- ✅ Real-world Analogy
- ✅ Class
- ✅ Object
- ✅ Creating Classes
- ✅ Creating Objects
- ✅ Properties
- ✅ Methods
- ✅ `$this`

---

# Concepts Pending

- Constructors (`__construct`)
- Destructors (`__destruct`)
- Object Lifecycle
- Memory Basics
- Object References
- Best Practices
- Debugging Objects
- Interview Questions
- Mock Interview

---

# Learning Objectives

This project is designed to understand:

- How OOP models real-world entities
- How classes define structure
- How objects represent runtime instances
- How properties store object state
- How methods define object behavior
- How `$this` refers to the current object

---

# Current Mini Project

## Product

Represents an inventory item.

### Properties

- name
- price
- stock

### Methods

- showDetails()
- updateStock()
- applyDiscount()

---

## Customer

Represents a customer.

### Properties

- name
- email
- phone

### Methods

- register()
- login()
- placeOrder()

---

## Order

Represents an order.

### Properties

- orderId
- status
- total

### Methods

- calculateTotal()
- cancel()
- generateInvoice()

---

# Current Limitations

This project intentionally avoids advanced OOP concepts until later chapters.

Not implemented yet:

- Encapsulation
- Constructors
- Inheritance
- Polymorphism
- Abstraction
- Interfaces
- Traits
- Static Members
- Design Patterns
- Namespaces
- Composer
- Autoloading

---

# Version History

| Version | Progress |
|----------|----------|
| v0.1 | Classes |
| v0.2 | Objects |
| v0.3 | Properties |
| v0.4 | Methods |
| v0.5 | `$this` |

---

# Next Milestone

Version **v0.6**

- Constructors (`__construct`)
- Automatic object initialization

---

# Author

Learning Project for mastering PHP Object-Oriented Programming from Beginner to Senior Developer.