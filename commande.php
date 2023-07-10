<?php
    include "connection.php";
    $nom = $_POST['name'];
    $food = $_POST['dish'];
    $num = $_POST['number_of_orders'];
    $addr = $_POST['address'];
    $phon = $_POST['phone'];
    $adf = $_POST['additional_food'];
    $dt = $_POST['date_and_time'];
    $mes = $_POST['message'];
    


    try{
        $sql = "INSERT INTO orders (nm, dish, noo, ads, tel, add_food, dat, msg) VALUES ('$nom', '$food', '$num','$addr', '$phon', '$adf', '$dt', '$mes')";
        $con->exec($sql);
    }catch(PDOException $e){

    }

    header("Location:order.php");
?>