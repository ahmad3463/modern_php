<?php
session_start();
    $host = "localhost";
    $dbname = "modernphp";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        // echo " connected successfully";

    }catch(PDOException $e){
        echo "Connection Failed!" . $e->getMessage();
    }
?>