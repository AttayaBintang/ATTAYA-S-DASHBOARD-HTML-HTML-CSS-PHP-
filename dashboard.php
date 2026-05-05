<?php
require_once "crud_web.php";

$db = "SELECT * FROM students";
$data = mysqli_query($connect, $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>DEMO CRUD PHP</h1>

    <a href="http://localhost/DASHBOARD%20HTML/insert_data.php">Add</a>
    <table border="1" cellspacing="0" width="70%" height="10%">
        <tr>
            <th>NO</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>age</th>
            <th>id</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
        $no = 1; // Buat variabel counter
        while($row = mysqli_fetch_assoc($data)) :; 
        ?>
            <tr>
                <td><?= $no++ ?></td> <!-- Nomor akan selalu urut di tampilan -->
                <td><?= $row['first_name']?></td>
                <td><?= $row['last_name']?></td>
                <td><?= $row['age']?></td>
                <td><?= $row['id']?></td>
                <td><a href="http://localhost/DASHBOARD%20HTML/update_data.php?id=<?php echo $row['id']?>">Update</a></td>
                <td><a href="http://localhost/DASHBOARD%20HTML/delete_data.php?id=<?php echo $row['id']?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>

    </table>

    <?php
    if(isset($_GET['message'])){
        echo "<h6>" . $_GET['message']."<h6>";
    }
    ?>

    <?php
    if(isset($_GET['insert_msg'])){
        echo "<h6>" . $_GET['insert_msg']."<h6>";
    }
    ?>

    <?php
    if(isset($_GET['delete_msg'])){
        echo "<h6>".$_GET['delete_msg']."</h6>";
    }
    ?>

    <?php
    if(isset($_GET['update_msg'])){
        echo "<h6>".$_GET['update_msg']."</h6>";
    }
    ?>

</body>
</html>