<?php

$dbHost     = "localhost";
$dbUser     = "root";
$dbPassword = "";
$dbName     = "tih";

// Connecting
$db = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection...
if($db->connect_error){
    die("Conexión fallida: ".$db->connect_error);
}