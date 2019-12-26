<?php
include '../includes/connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $imageLoc = $_FILES['imageLoc']['name'];
    $descrip = $_POST['description'];
    $sql = "INSERT INTO items (name ,imageLoc ,description , price) VALUES ('$name', '$imageLoc' , '$descrip' , '$price')";
    $con->query($sql);
    /*if (mysql_query($sql))
    {
        move_uploaded_file($_FILES['imageLoc']['tmp_name'], "images/$imageLoc");
        echo "<script>alert('success')</script>";

    }
    else {
        echo "<script>alert('fail')</script>";
    }*/

header("location: ../admin-page.php");
?>