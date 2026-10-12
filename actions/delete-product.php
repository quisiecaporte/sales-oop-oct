
<?php
    include "../classes/Product.php";

    $product = new Product;

    $product->deleteProduct($_GET['product_id']);


// THIS CODE IS FROM GITHUB
