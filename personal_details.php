<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $address = $_POST['address'];

    $servername = "localhost";
    $username = "root";
    $passward = "";
        // $_POST['password'];
    $database = "resume-builder";

    $conn = mysqli_connect($servername, $username, $passward, $database);

    if(!$conn){
        echo "not connected";
    }else{

      $username1 = $_SESSION['username'];
      // echo $username1;

      $sql1 = "UPDATE `user` SET `address` = '$address' WHERE `username` ='$username1' ";
      $result = mysqli_query($conn, $sql1);
        // echo $a .$b .$c;
    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="Style/personal_D.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Personal Details</title>
   </head>
<body>
  <div class="container">
    <div class="title">Personal Details</div>
    <div class="content">
      <form action="personal_details.php" method = "post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="textarea" name = "address" placeholder="Enter your address" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" onclick="save()">
        </div>
      </form>
    </div>
  </div>
   <div id="next" class="button">
        <a href="edu_details.php">Next</a>
        </div>
</body>
<script>
  function save()
  {
    alert("Data Saved Successfully \nPlease Proceed Further");
  }
</script>
</html>