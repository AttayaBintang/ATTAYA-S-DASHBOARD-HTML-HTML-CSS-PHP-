<?php

require_once "crud_web.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (first_name, last_name, age) VALUES('$first_name', '$last_name', '$age')";
    $result = mysqli_query($connect, $sql);
    
    if(!$result){
    die("QUERY FAILED".mysqli_error($connect));
    }
    else{
        header('location:dashboard.php?insert_msg=New Data Has Been Added');
    }
}
$db = "SELECT * FROM students";
$data = mysqli_query($connect, $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="first_name" placeholder="ur first name here" required>
    <input type="text" name="last_name" placeholder="ur last name here" required>
    <input type="number" name="age" placeholder="ur age here" required>

    <button type="submit">kirim</button>
        
    </form>
</body>
</html>
