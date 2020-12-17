<?php
session_start();
include "config.php";
$user_id = $_SESSION['user_id'];
$catalog_id = $_SESSION['catalog_id'];
$count = $_POST['count'];
$sql = "INSERT INTO orders (user_id, catalog_id, count) VALUES ('$user_id', '$catalog_id', '$count')";
if(mysqli_query($dbConnect,$sql)) {
    header("Location: /?page=cart&order=done");
}