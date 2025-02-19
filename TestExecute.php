<?php
include "GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
insert into customers(id, name, email)
values('2', 'horikita suzune', 'hone@gmail.com'),
('3', 'yukina minato', 'yumi@gmail.com');
SQL;

$connection->exec($sql);
$connection = null;