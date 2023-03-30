<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $objective = $_POST['objective'];

    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "resume-builder";


    $conn = mysqli_connect($servername, $username, $passward, $database);

    if(!$conn){
        echo "not connected";
    }else{

        $id = $_SESSION['username'];
        $skill = $_SESSION['skill'];
        $interst = $_SESSION['interst'];
        $languages = $_SESSION['lang'];

        // $photo = _POST['photo'];

        // $_SESSION['lang'] = $photo;


        $sql = "INSERT INTO `resume_details` (`resume_id`, `skills`, `interests`, `objective`, `languages`) VALUES ('$id', '$skill', '$interst', '$objective', '$languages')";

        $result = mysqli_query($conn, $sql);
    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/obj.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Objective</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Objective</b></div>

    <div class="content">
      <form action="obj.php" method = "post">

        <div id="addmore" class="user-details">
 
          <div id="adde" class="input-box">

            <span class="details">Objective :</span>
            <input type="textarea" name="objective" placeholder="Enter your Objective" required>
            <span class="details">Add Your Photo :</span>
            <input id="photo" type="file" name="photo" id="uploader" accept="image/*" capture>
        
        </div> 
        </div>
           <div class="button">
          <input type="submit" value="Submit" onclick="save()">
        </div>
      </form>
    </div>
  </div>
</div>
<div id = "nextpre">

<div id="prev" class="b">
  <a href="exp.php">Prev</a>
</div>
<div id="next" class="b">
  <a href="template.php">Next</a>
  </div>
</body>
<script>
  function save()
  {
    alert("Data Saved Successfully \nPlease Proceed Further");
  }
</script>
</html>