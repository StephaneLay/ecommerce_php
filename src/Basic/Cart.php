<?php

namespace Hb\EcommercePhp\Basic;

class Cart{
    private int $productNumber=0;
    private $cartProducts = [];

    public function __construct()
    {
        if (isset($_SESSION['cart'])) {
            $this->cartProducts = $_SESSION['cart'];
            $this->productNumber = $_SESSION['cartnumber'];
        }
    }

     public function addProductToCart()
    {
        if (isset($_GET['name'])) {
            foreach ($this->cartProducts as $cartProduct) {
                if ($cartProduct["name"] === $_GET['name']) {
                    $cartProduct['quantity'] ++;
                }else {
                    $newEntry = ["name"=>"","price"=>0,"quantity"=>1];
                    $newEntry["name"] = $_GET['name'];
                    $newEntry["price"] = $_GET['price'];
                    $cartProduct[] = $newEntry;
                }
            }
        }
        $_SESSION['cart'] = $this->cartProducts;
        $this->productNumber ++;
        $_SESSION['cartnumber'] =  $this->productNumber;
    }

    public function getProductNumber(){
        return $this->productNumber;
    }
}