<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - <?php echo $_SESSION['username']?></title>
  <link rel="stylesheet" href="Style/style.css">
</head>
<body>
  <div class="menu-bar">
  <ul>
      <li><a href ="index.php"> Home</a></li>
      <li><a href = "members.php">Members</a></li>
      <li><a href = "resource.php" >Resources</a></li>
      <li><a href = "contacts.php">Contact</a></li>
  </ul>
</div>

<div id="text">

  <a href="#"><?php echo "Welcome" ." " . $_SESSION['full_name']?></a>
  <br>
  <br>

  <a href="personal_details.php">Build Your Resume Here</a>
</div>

</body>
</html>
