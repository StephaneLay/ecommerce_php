<?php

namespace Hb\EcommercePhp\Basic;

class Product
{
    private string $imgUrl;
    private string $name;
    private string $description;
    private int $price;

    public function __construct($url, $name, $desc, $price)
    {
        $this->imgUrl = $url;
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;
    }

    public function render()
    {
        echo '<div class="product">
    <img src="' . $this->imgUrl . '" alt="' . $this->name . '">
    <div class="product-text">
        <hgroup>
            <h3>' . $this->name . '</h3>
            <p>' . $this->description . '</p>
        </hgroup>
        <p>' . $this->price . ' €</p>
        <a href="/index.php?name=' . $this->name . '&price=' . $this->price . '">Add to Cart</a>
    </div>
</div>';
    }

}
?>