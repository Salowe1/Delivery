<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = new PDO("mysql:host=$servername;dbname=restodb",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>