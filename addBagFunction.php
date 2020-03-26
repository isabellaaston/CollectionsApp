<?php
function addBag (PDO $db) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = intval($_POST['price']);
    $materials = $_POST['materials'];
    $image = $_POST['image'];
    $query=$db->prepare ("INSERT INTO `Bags` (`brand`, `image`, `model`, `price`, `materials`)VALUES(?, ?, ?, ?, ?);");
    $query -> execute([$brand, $image, $model, $price, $materials]);
    echo "Bag Added";
}