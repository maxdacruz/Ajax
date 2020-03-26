<?php
session_start();

require_once 'database.php';

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
$query = 'SELECT * FROM product';
$result_query = mysqli_query($connect, $query);

while ($res = mysqli_fetch_assoc($result_query)) {

  echo '<p>  ' . $res['name'] . '  total:' . $_SESSION["cart"][$res['id']] . '</p>';
};

// Get product ID
$myProduct = $_POST['button'];

// Sum of all the products
$_SESSION["cart"]["totalNb"] += 1;

// Quantity of a specific product
$_SESSION["cart"][$myProduct] += 1;

//echo $_SESSION["cart"]["totalNb"];
