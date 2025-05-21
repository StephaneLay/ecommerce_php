<?php

namespace Hb\EcommercePhp\Basic;

class ProductList
{
    private $products = [];
    private $listTitle = "Products List";


    public function __construct()
    {
        if (isset($_SESSION['products'])) {
            $this->products = $_SESSION['products'];
        } else {
            $this->addProduct("assets/dogo1.jpg", "dogo1", "Un très beau doggo", 17);
            $this->addProduct("assets/dogo2.jpg", "dogo2", "Un  beau doggo", 37);
            $this->addProduct("assets/dogo3.jpg", "dogo3", "Un superbe doggo", 11);
            $this->addProduct("assets/dogo4.jpg", "dogo4", "Un magnifique doggo", 66);
        }
    }

    public function addProduct($url, $name, $desc, $price)
    {
        $newProduct = new Product($url, $name, $desc, $price);
        $this->products[] = $newProduct;
        $_SESSION['products'][] = $newProduct;
    }

    public function render()
    {
        echo '<h2>' . $this->listTitle . '</h2>';
        echo '<ul class="productslist">';
        foreach ($this->products as $product) {
            if (!isset($_POST['search']) || isset($_POST['search']) && str_contains($product->getName(), $_POST['search'] )) {
                echo '<li>';
                $product->render();
                echo '</li>';
            }
        }
        echo '</ul></body>
</html>';
    }
}
?>