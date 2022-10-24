<?php 
$host = "localhost";
$user = "root";
$password = "";
$banco = "aulas22";

$conn = new mysqli($host, $user, $password, $banco);


if($conn->connect_errno){
    printf("Connect failed: %s\n", $$conn->$connect_errno);
    exit();
}


?>