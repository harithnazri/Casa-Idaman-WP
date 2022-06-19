<?php
include_once 'db_conn_residents.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$unit = $_POST['unit'];

 $sql = "INSERT INTO list (name, phone, email, unit) 
 VALUES ('Hussein', '89209203', 'emads@gmail.com', 'A-11-7');";
mysqli_query($conn , $sql);




?>