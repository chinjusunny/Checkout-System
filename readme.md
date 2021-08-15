# Checkout System

**Step 1: Shopping cart**

You are building a checkout system for a shop which only sells apples and oranges.  
Apples cost 70cents and oranges cost 35cents.  
Build a checkout system which takes a list of items scanned at the till and outputs the total cost  
For example: [ Apple, Apple, Orange, Apple ] => $2.45  
Make reasonable assumptions about the inputs to your solution; for example, many candidates take a list of strings as input  
  
**Step 2: Simple offers**

  The shop decides to introduce two new offers:  
- Buy one, get one free on Apples  
- 3 for the price of 2 on Oranges  
Update your checkout functions accordingly

## Built With

- Bootstrap
- PHP
- Codeigniter
- jQuery

## Installation

Project runs from index.php page : http://localhost:8888/checkout/
## Screenshots
![CI_1](https://user-images.githubusercontent.com/1222804/129471049-12b7ec82-e0d0-4b59-ab99-6d28a31e496d.png)
![CI_2](https://user-images.githubusercontent.com/1222804/129471052-23ef3c6b-c557-4393-bed5-fd5f268a1bea.png)
![CI_3](https://user-images.githubusercontent.com/1222804/129471059-a6ee1ac8-0797-4084-a0e4-8f23249912e6.png)


## Testing

Execute the following commands from the project directory:

    1. $ vendor/bin/phpunit -c application/tests/ application/tests/WelcomeTest.php
    2. $ vendor/bin/phpunit -c application/tests/ application/tests/FunctionTest.php

Codeigniter controller to test the basic functions:

    http://localhost:8888/checkout/TestingController 

