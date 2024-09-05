<?php 
$conn = new mysqli("localhost:3306", "root", "", "wdpf60");

$id = $_GET['id'];
// echo "Hello Everyone";

// $dist = [
//     1=>"Dhaka is a population city",
//     2=>"Cumilla is a Beautiful city",
//     3=>"Rajshahi is a mango city in Bangladesh"
    
// ];
// echo $dist[$id];

    $sql = $conn->query("SELECT * FROM city WHERE id = '$id'");
    $row = $sql->fetch_assoc();
    echo $row['id'] . "<br>". $row['name'] . "<br>" . $row['details'];
    // echo $row['id'] . "\n". $row['name'] . "/n" . $row['details'];

?>