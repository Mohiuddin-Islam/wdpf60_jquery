<?php require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <style>
        th,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse
        }
    </style>
</head>
<body>
    <?php 

    // $serializedData = $_POST['mydata'];
    // parse_str($serializedData, $data);

    $sql = $conn->query("SELECT * FROM students1");
    
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><a href="#" class="stid" value="<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?>
        
    </table>
    <script>
        $(document).ready(function () {
            $(".stid").on('click',function(event){
                event.preventDefault();
                let sid = $(this).attr('value');
                //alert(sid);

                $.post("delete.php", {id:sid}, function(data, status){
                    alert(data + "from delete page");
                })
            })
        });
    </script>
</body>
</html>