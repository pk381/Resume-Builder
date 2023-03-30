<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    // $_POST['password'];
    $database = "resume-builder";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "not connected";
    }
    else{

        $id = $_SESSION['username'];

        $sql = "INSERT INTO `project` (
        `resume_id`,
        `title`,
        `description`) 
        VALUES (
        '$id',
        '$title',
        '$description')";

        $result = mysqli_query($conn, $sql);
    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/project.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Project Details</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Project Details</b></div>
    <div class="content">
      <form action="project.php" method = "post">
        <div id="addmore" class="user-details">
          <div class="input-box">
            <span class="details">Project Title :</span>
            <input type="text" name="title" placeholder="Enter project title" required>
            <span class="details">Project Description :</span>
            <input type="textarea" name="description" placeholder=" Description....... " required>
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Submit" onclick="save()">
        </div>
      </form>
    </div>
  </div>
  <div id = "nextpre">

    <div id="prev" class="b">
      <a href="ach.php">Prev</a>
    </div>
    <div id="next" class="b">
      <a href="cer.php">Next</a>
      </div>
  </div>
  <script>
    function save()
    {
      alert("Data Saved Successfully \nPlease Proceed Further");
    }
  </script>
</body>
</html>