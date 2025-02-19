<?php
include "GetConnection.php";
$connection = getConnection();

$username = $connection->quote("oumae kumiko'; #");
$password = $connection->quote("kumikosaja123");

$sql = "select * from admin where username = $username and password = $password";

$statement = $connection->query($sql);
$success = false;
$find_user = null;
foreach($statement as $row){
    $success = true;
    $find_user = $row['username'];
}
if($success){
    echo "Sukses login ke akun ".$find_user.PHP_EOL;
}else{
    echo "Gagal login".PHP_EOL;
}
$connectino = null;