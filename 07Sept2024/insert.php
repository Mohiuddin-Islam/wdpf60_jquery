<?php 
require_once "dbconfig.php";

//print_r($_GET);
$serializedData = $_POST['mydata'];
parse_str($serializedData, $data);
//print_r($data);

$name = $data['name'];
$gender = $data['gender'];
$dob = $data['dob'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];

$sql = $conn->query("INSERT INTO students1 VALUES(NULL, '$name', '$gender', '$dob', '$email', '$phone', '$address')");

if($conn->affected_rows){
    echo "Successfully Inserted";
}
?>