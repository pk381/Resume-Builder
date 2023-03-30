<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "resume-builder";


    $conn = mysqli_connect($servername, $username, $passward, $database);

    if(!$conn){
        echo "not connected";
    }else{

        $sql = "Select * from `user` where `email` ='$email' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        // echo "done2hjhsaJDVAdsd2";
        
        if ($num == 1){
          
          while($row = mysqli_fetch_assoc($result)){
            
            
            if ($password == $row['password']){  
                
                  $login = true;
                  session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['full_name'] = $row['full_name'];
                  $_SESSION['username'] = $row['username'];
                  header("location: resource.php");
              } 
              else{
                  $showError = "Invalid Credentials";
              }
          }
          
      } 
      else{
          $showError = "Invalid Credentials";
      }
    }
   
}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="Style/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action = "login.php" method = "post">
  <div class="form-field">
    <input type="email" name = "email" placeholder="Email" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name = "password" placeholder="Password" required/>                         
  </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
