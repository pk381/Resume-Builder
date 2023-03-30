
<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $languages = $_POST['languages'];
    
    $_SESSION['lang'] = $languages;
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/ach.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Languages</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Languages</b></div>
    <div class="content">
      <form action="ach.php" method = "post">
        <div id="addmore" class="user-details">
          <div id = "adde" class="input-box">
            <span class="details">Languages :</span>
            <input type="text" name = "languages" placeholder="Add Languages ........." required>
          </div>
        </div>
        
        <!-- <div id="add">
          <input type="button" value="Add More">
        </div> -->
        
        <div class="button">
          <input type="submit" value="Submit" onclick="save()">
        </div>

      </form>
    </div>
  </div>

  <div id = "nextpre">

    <div id="prev" class="b">
      <a href="skill.php">Prev</a>
    </div>
    <div id="next" class="b">
      <a href="project.php">Next</a>
      </div>
  </div>
<!-- 
   <script>

    let adde = document.getElementById("adde");
    let addmore = document.getElementById("addmore");
    let add = document.getElementById("add");

    html = addmore.innerHTML;

    add.addEventListener("click", (e)=>{

      addmore.innerHTML = addmore.innerHTML + html;
      console.log(addmore);
    });


  </script> -->
<script>
  function save()
  {
    alert("Data Saved Successfully \nPlease Proceed Further");
  }
</script>
</body>
</html>