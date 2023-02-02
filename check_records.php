<?php 
include_once("config.php");
session_start();

/* Get data from Client side using $_POST array */
if (isset($_POST["submit"])) {
    $Email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $Password = mysqli_real_escape_string($mysqli, $_POST['password']);
}
//Check customer database
$result = mysqli_query($mysqli, "SELECT * from customers WHERE Email = '$Email'"); //Try to access offset value error on wrong email


if (!$result) {
    die("Database fetch failed: " . mysqli_error($mysqli));
}

$count = mysqli_num_rows($result);
if ($count>0){
    $row = mysqli_fetch_array($result);
    $name = $row['Name'];
    $email = $row['Email'];
    $pass = $row['Password'];

    if ($pass == $Password){
        $_SESSION['msg'] = "User Verified";
        //echo  "User Verified. <br>Welcome ".$name;
        $_SESSION['name'] = $row['Username'];
        $_SESSION['id'] = $row['id'];
        //header("Location: login.php");
        //header( "refresh:5;url=index.php" );
        header("Location:index.php");

        exit();
    }
    else{
        $_SESSION['msg'] = "Password Incorrect. Try Again.";
        header("Location: login.php");
        exit();
    }
}
else{
    $_SESSION['msg'] = "No such email found!";
    header("Location: login.php");
    exit();
}
// $name = $row['Name'];
// $email = $row['Email'];
// $pass = $row['Password'];

?>