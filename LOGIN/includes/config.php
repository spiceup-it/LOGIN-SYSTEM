<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','login');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// if($link === false){
//     die("ERROR: Could not connect.".mysqli_connect_error());
// }
// echo "Connected successfully";
// $dbcon=mysqli_connect("localhost","root","");
// mysqli_select_db($dbcon,"users");

?>
