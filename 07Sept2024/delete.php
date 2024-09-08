<?php 
require_once "dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
</head>
<body>
    <?php 
    
    $id = $_POST['id'];
    $sql = $conn->query("DELETE FROM students1 WHERE id = '$id'");

    if($delete){
        echo "Successfully Delete";
    }
    
    ?>
</body>
</html>