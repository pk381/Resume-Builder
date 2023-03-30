
<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $certificate_name = $_POST['certificate_name'];
    $certificate_type = $_POST['certificate_type'];
    


    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "resume-builder";


    $conn = mysqli_connect($servername, $username, $passward, $database);

    if(!$conn){
        echo "not connected";
    }else{

        $id = $_SESSION['username'];
        $sql = "INSERT INTO `certificates` (`resume_id`, `certificate_name`, `certificate_type`)
         VALUES ('$id', '$certificate_name', '$certificate_type');";
        $result = mysqli_query($conn, $sql);

        if($result){
          echo "done";
        }
        else{
          echo "not done";
        }
        // echo $a .$b .$c;
    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/cer.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Certificates</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Certificates</b></div>

    <div class="content">
      <form action="cer.php" method = "post">

        <div id="addmore" class="user-details">
 
          <div id="adde" class="input-box">

            <span class="details">Certificate Name :</span>
            <input type="text" name="certificate_name" placeholder="Write the Certificat name" required>
            <span class="details">Certificate type :</span>
            <input type="textarea" name="certificate_type" placeholder=" Mention Certificate type" required>

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
      <a href="project.php">Prev</a>
    </div>
    <div id="next" class="b">
      <a href="exp.php">Next</a>
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