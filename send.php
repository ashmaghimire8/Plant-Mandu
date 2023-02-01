<?php
include_once("config2.php");

$result = mysqli_query($con, "SELECT * FROM feedback ORDER BY id ASC"); //using mysql query instead
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));

// $host = "localhost";
// $user ="root";
// $pass = "";
// $db = "form";

// $con = new mysqli($host,$user,$pass,$db);
// if(!$con) {
//     echo "there are some problem";

// }
if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);

    $qry = "INSERT INTO `feedback`(`name`, `email`, `phone`, `msg`)VALUES ('$name', '$email', $phone, '$msg')";
}
//$qry = "INSERT INTO `feedback`(`name`, `email`, `phone`, `msg`)VALUES ('$name', '$email', $phone, '$msg')";
$insert = mysqli_query($con,$qry);
if(!$insert){
    echo "There are some problems while inserting data";
    header("Location:index.php");
}
else{
    echo "Data Inserted";
   // header("Location:index.php");

}