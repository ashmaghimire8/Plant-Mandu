<?php 
//including database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id ASC"); //using mysql query instead
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantMandu SignUp </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Validate jss file -->
    <!-- <script src="validateSignUp.js"></script> -->
    <script>
    function validateForm() {
      var username = document.forms["signupForm"]["username"].value;
      var email = document.forms["signupForm"]["email"].value;
      var password = document.forms["signupForm"]["password"].value;
      var confirmPassword = document.forms["signupForm"]["confirmPassword"].value;
      var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (username == "") {
        alert("Username must be filled out");
        return false;
      }
      if (email == "") {
        alert("Email must be filled out");
        return false;
      } else if (!emailPattern.test(email)) {
        alert("Email is invalid");
        return false;
      }
      if (password == "") {
        alert("Password must be filled out");
        return false;
      }
      if (confirmPassword == "") {
        alert("Confirm password must be filled out");
        return false;
      } else if (password != confirmPassword) {
        alert("Passwords do not match");
        return false;
      }
    }
  </script>
</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="index.php" class="logo">Plant<span>Mandu</span></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.html">about</a>
        <a href="index.html">products</a>
        <a href="index.html">review</a>
        <a href="index.html">contact</a>
    </nav>

    <!-- <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="login.html" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
    </div> -->

</header>

<!-- header section ends -->

<!-- signup section starts  -->

<section class="login contact" id="contact">

    <h1 class="heading"> <span>SignUp</span></h1>

    
    <div class="row">
    <form name="signupForm" action="add.php" method="post" onsubmit="return validateForm()">
        
        <input type="text" placeholder="Name" class="box" name="username" id="username">
        <input type="text" placeholder="Address" class="box" name="address" id="address">
        <input type="tel" placeholder="Phone Number" class="box" name="phone" id="phone">
        <input type="email" placeholder="Email" class="box" name="email" id="email">
        <input type="text" placeholder="Age" class="box" name="age" id="age">
        <input type="text" placeholder="Gender" class="box" name="gender" id="gender">
        <input type="password" placeholder="Password" class="box" name="password" id="password">
        <input type="password" placeholder="Re-write Password" class="box" id="confirmPassword" name="confirmPassword">
        <input type="submit" value="Submit" class="btn" id="Submit" name="Submit">
    
        
    
        <div class="or-container">
                <div class="line-separator"></div>
                <div class="or-label">or</div>
                <div class="line-separator"></div>
            </div>
            <div class="row">
            <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a> </div>
            </div> <br> <br>
            <p class="text-inverse text-center">Already have an account? <a href="login.php" data-abc="true">Login</a></p>
    
        </form>

        <div class="image">
            <img src="images/signup-img.jpg" alt="">
        </div>

    </div>

</section> 
<!-- signup section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Kathmandu</a>
            <a href="#">Pokhara</a>
            <a href="#">Chitwan</a>
            <a href="#">Butwal</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+981234567</a>
            <a href="#">plantmandu@gmail.com</a>
            <a href="#">Kathmandu, Nepal - 44600</a>
           <!-- <img src="images/payment.png" alt="">-->
        </div>

    </div>

    <div class="credit"> Copyright @ 2022 PlantMandu</div>

</section>

<!-- footer section ends -->
</body>
</html>