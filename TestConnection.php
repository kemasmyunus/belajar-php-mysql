<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_mysql";
$username = "root";
$password = "";

try{

    $connection = new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
    echo "Koneksi Sukses";
    // menutup koneksi
    $connection = null;
}catch(PDOException $exception){
    echo "Error tidak terkoneksi database : ".$exception->getMessage().PHP_EOL;
}