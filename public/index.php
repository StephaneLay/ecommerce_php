<?php

use Hb\EcommercePhp\Basic\Navbar;
use Hb\EcommercePhp\Basic\Product;
use Hb\EcommercePhp\Basic\ProductList;

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

$header = new Navbar("/", "cart.php");
$productList = new ProductList();

$productList->addProduct("assets/dogo1.jpg", 'dogo1', 'un beau doggo', 17);
$productList->addProduct("assets/dogo2.jpg", 'dogo2', 'un magnifique doggo', 26);

$productList->render();
