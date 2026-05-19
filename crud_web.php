<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

$connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$connect){
    die("unable to connect");
}
else{
    // echo "Was Connected";
}
?>
