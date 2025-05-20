<?php

use Hb\EcommercePhp\Basic\Cart;
use Hb\EcommercePhp\Basic\Navbar;

require_once __DIR__."/../vendor/autoload.php";

session_start();

$cart = new Cart();
$header = new Navbar("/", "cart.php",$cart->getProductNumber());