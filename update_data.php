<?php
include 'crud_web.php';
?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $db = "SELECT * FROM `students` WHERE `id` = '$id'";
    $data = mysqli_query($connect, $db);

    if(!$data){
        die("Query Failed".mysqli_error());
    }
    else{
        $row = mysqli_fetch_assoc($data);
        // print_r($row);
    }

}
?>

<?php
if(isset($_POST['update_students'])){
    if(isset($_GET['id_new'])){
        $id = $_GET['id_new'];
    }
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "UPDATE `students` set `first_name` = '$fname', `last_name` = '$lname', `age` = '$age' WHERE `id` = '$id'";
    $result = mysqli_query($connect, $query); 

    if(!$result){
        die("QUERY FAILED");
        
    }
    else{
        header('location:dashboard.php?update_msg=RECENT DATA UPDATED');
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleUpdateData.css">
    <title>Document</title>
</head>
<body>
    <form action="update_data.php?id_new=<?php echo $id; ?>" method="post">
    <label for="first_name">Nama Panggilan:</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" required>
    <label for="last_name">Nama lengkap:</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" required>
    <label for="age">Umur:</label>
    <input type="number" name="age" value="<?php echo $row['age'];?>" required>
    <button type="submit" name="update_students">Update Data</button>
</form>
</body>
</html>
