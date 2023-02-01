<?php 
//including database connection file
include_once("config.php");

if(isset($_POST["Submit"])){
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($mysqli, $_POST['confirmPassword']);
    
    //checking empty fields
    if (empty($username) || empty($address) || empty($phone)|| empty($email)|| empty($age)|| empty($gender)|| empty($password)|| empty($confirmPassword)) {
        echo "<font color='red'> Some field are empty. </font><br>";
        //link to previous page
        echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
    }
    else{
        //if all the fields are filled(not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO `customers`(`username`,`address`,`phone`,`email`,`age`,`gender`,`password`,`confirmPassword`) VALUES('$name','$address','$phone','$email','$age','$gender','$password','$confirmPassword')");
        if (!$result)
            die("Insertion Failed: " . mysqli_error($mysqli));
        //display success message
        echo "<font color = 'green'>Data saved successfully.</font>";
        header("Location:index.php");
    }

}
?>

