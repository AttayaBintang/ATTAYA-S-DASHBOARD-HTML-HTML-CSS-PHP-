<?php
include "crud_web.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `students` WHERE `students` . `id` = '$id'";

    $result = mysqli_query($connect, $query);

    if(!$result){
        die("QUERY FAILED".mysqli_error());
    }
    else{
        header('location:dashboard.php?delete_msg=You have deleted the data');
    }
}

?>