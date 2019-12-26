<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$id = $_POST['id'];
$sql = "DELETE FROM `items` WHERE 'id' = $id";


$con->query($sql);
header("location: ../admin-page.php");
?>