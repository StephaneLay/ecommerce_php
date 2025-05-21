<?php

use Hb\EcommercePhp\Basic\Cart;
use Hb\EcommercePhp\Basic\Navbar;
use Hb\EcommercePhp\Basic\Product;
use Hb\EcommercePhp\Basic\ProductList;

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

$cart = new Cart();
$header = new Navbar("/", "cart.php",$cart->getProductNumber());
$productList = new ProductList();


$productList->render();
$cart->addProductToCart();

// PROBLEME==== LE COMPTEUR S'INCREMENTE POUR RIEN DES QU'ON CHARGE UNE PAGE !!
// IL FAUDRAIT PEUT ETRE REPENSER LE SYSTEME POUR CONTENIR LES INFORMATIONS DIFFEREMENT
//fonction recherche!!!
