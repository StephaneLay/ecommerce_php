<?php

namespace Hb\EcommercePhp\Basic;

class Cart
{
    private int $productNumber = 0;
    private $cartProducts = [];
    private $cartTitle = "My Cart";

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
            if (!$this->isContainingProduct($_GET['name'])) {
                $newEntry = ["name" => "", "price" => 0, "quantity" => 1];
                $newEntry["name"] = $_GET['name'];
                $newEntry["price"] = $_GET['price'];
                $this->cartProducts[] = $newEntry;
            }
            $_SESSION['cart'] = $this->cartProducts;
            $this->productNumber++;
            $_SESSION['cartnumber'] = $this->productNumber;
        }
    }

    public function render()
    {
        $sum = 0;
        echo '<h2>' . $this->cartTitle . '</h2>';
        echo '<div class="cartproductcontainer">';
        foreach ($this->cartProducts as $cartEntry) {
            echo '<div class="cartproduct">
        <img src="assets/' . $cartEntry["name"] . '.jpg">
        <div class="cartdesc">
            <p>' . $cartEntry["name"] . '</p>
            <p>' . $cartEntry["quantity"] . ' x ' . $cartEntry["price"] . ' €</p>
        </div>
        </div>';
            $sum += $cartEntry["quantity"] * $cartEntry["price"];
        }
        echo '<h3>Total price : ' . $sum . ' €</h3>';
        echo '</div>';

    }

    public function getProductNumber()
    {
        return $this->productNumber;
    }

    private function isContainingProduct($name)
    {
        foreach ($this->cartProducts as &$cartProduct) {
            if ($cartProduct["name"] === $name) {
                $cartProduct['quantity']++;
                return true;
            }
        }
        return false;
    }
}
?>