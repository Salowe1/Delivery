<?php
    include "connection.php";
    $nom = $_GET['name'];
    $mail = $_GET['email'];
    $cmt = $_GET['comment'];

    try{
        $sql = "INSERT INTO comments (client, email, comment) VALUES ('$nom', '$mail', '$cmt')";
        $con->exec($sql);
    }catch(PDOException $e){

    }

    header("Location:review.php");
?>