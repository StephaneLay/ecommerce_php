<?php

namespace Hb\EcommercePhp\Basic;

class ProductList
{
    private $products = [];
    private $list_title = "Products List";


    public function __construct()
    {
        if (isset($_SESSION['products'])) {
            $this->products = $_SESSION['products'];
        }
    }

    public function addProduct($url, $name, $desc, $price)
    {
        $newProduct = new Product($url, $name, $desc, $price);
        $this->products[] = $newProduct;
    }

    public function render()
    {
        echo '<h2>' . $this->list_title . '</h2>';
        echo '<ul>';
        foreach ($this->products as $product) {
            echo '<li>' . $product->render() . '</li>';
        }
        echo '</ul>';
    }
}
?>