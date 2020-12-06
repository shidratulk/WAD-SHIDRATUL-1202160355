<?php 
include 'connect.php';
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$img = $_POST['img'];
 
input ("INSERT INTO products VALUES('','$name','$price','$description','$stock','$img')");
 
header("location:product.php?pesan=input");
?>