<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $skill = $_POST['skill'];
    $interst = $_POST['interst'];

    $_SESSION['skill'] = $skill;
    $_SESSION['interst'] = $interst;
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/skill.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Skills and Interests</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Skills and Interests</b></div>
    <div class="content">
      <form action="skill.php" method = "post">
        <div id="addmore" class="user-details">
          <div id = "adde" class="input-box">
            <span class="details">Skills :</span>
            <input type="text" name="skill" placeholder="Add skill with space........." required>
            <span class="details">Interests :</span>
            <input type="text" name="interst" placeholder="Add your interest with space........." required>
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
      <a href="edu_details.php">Prev</a>
    </div>
    <div id="next" class="b">
      <a href="ach.php">Next</a>
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