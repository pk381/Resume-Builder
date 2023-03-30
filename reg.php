<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="Style/reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
   </head>
<body>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password =  $_POST['password'];
    $username1 = $_POST['username'];
    $cpassword = $_POST['cpassword'];
    
    
    if($cpassword == $password){
      
        $servername = "localhost";
        $username = "root";
        $passward = "";
        // $_POST['password'];
        $database = "resume-builder";


        $conn = mysqli_connect($servername, $username, $passward, $database);

        if(!$conn){
            echo "not connected";
        }
        else{

            $sql = "INSERT INTO `user` (
            `full_name`,
            `email`,
            `phone_number`,
            `username`,
            `password`) 
            VALUES (
            '$full_name',
            '$email',
            '$phone_number',
            '$username1',
            '$cpassword')";

            $result = mysqli_query($conn, $sql);


            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username1;
            $_SESSION['full_name'] = $full_name;
            header("location: resource.php");
        }
  }
  else{
    echo "password does not match";
  }
   
}

?>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="reg.php" method ="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="full_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
    <div class="title">
     <span>If you have already an account...</span>
    </div>
    
    <div id = "btn">
          <a  href="login.php">Login</a>
    </div>

  </div>
</body>
</html>