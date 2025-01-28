<?php
session_start();
include('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_POST["image"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $property = array(
        'image' => $image,
        'price' => $price,
        'description' => $description,
    );
    redirect("confirmation.php");
}
