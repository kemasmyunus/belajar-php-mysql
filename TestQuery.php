<?php

include "GetConnection.php";
$connection = getConnection();
$query = "select id, name, email from customers";
$result = $connection->query($query);
foreach($result as $row){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "ini adalah $id, dengan nama $name, dan email $email".PHP_EOL;
}

$connection = null;

