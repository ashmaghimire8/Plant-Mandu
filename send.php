<?php
include_once("send.php");
$result = mysqli_query($mysqli,"SELECT *FROM `table1` WHERE 1");
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));
$host = "localhost";
$user ="root";
$pass = "";
$db = "form";

$con = new mysqli($host,$user,$pass,$db);
if(!$con) {
    echo "there are some problem";

}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

$qry = "INSERT INTO `table1`(`name`, `email`, `phone`, `msg`)VALUES ('$name', '$email', $phone, '$msg')";
$insert = mysqli_query($con,$qry);
if(!insert){
    echo "there are some problems while inserting data";
}
else{
echo "data Inserted";

}