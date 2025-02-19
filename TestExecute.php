<?php
include "GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
insert into customers(id, name, email)
values('1', 'kousaka reina', 'kore@gmail.com');
SQL;

$connection->exec($sql);
$connection = null;