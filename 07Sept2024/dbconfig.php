<?php 
$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "wdpf60";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Connection Failed".$conn->connect_error;
    exit();
}

?>