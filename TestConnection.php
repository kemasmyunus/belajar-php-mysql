<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_mysql";
$username = "root";
$password = "";

$connection = new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
echo "Koneksi Sukses";