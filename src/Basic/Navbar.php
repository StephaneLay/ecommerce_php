<?php

namespace Hb\EcommercePhp\Basic;

class Navbar
{

    public function __construct($productlink, $cartlink,$number)
    {
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Eshop php</title>
</head>
<body>';


        echo '<header>
    <div>
        <h1>E-Shop</h1>
        <ul>
            <li><a href="' . $productlink . '">Products</a></li>
            <li><a href="' . $cartlink . '">Cart</a>
            <p id="cartnumber">'.$number.'</p>
            </li>
                    </ul>
    </div>
    <form method="post">
        <input type="text" name="search" >
        <button >Search</button>
    </form>
</header>
';
    }
}

?>

