<?php

use Hb\EcommercePhp\Basic\Cart;
use Hb\EcommercePhp\Basic\Navbar;
use Hb\EcommercePhp\Basic\Product;
use Hb\EcommercePhp\Basic\ProductList;

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

$cart = new Cart();
$cart->addProductToCart();
$header = new Navbar("/", "cart.php",$cart->getProductNumber());
$productList = new ProductList();


$productList->render();


//fonction recherche!!!
