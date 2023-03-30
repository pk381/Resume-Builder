
<?php


session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $company_name = $_POST['company_name'];
    $duration = $_POST['duration'];
    $role = $_POST['role'];

    echo "done";
    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "resume-builder";


    $conn = mysqli_connect($servername, $username, $passward, $database);

    if(!$conn){
        echo "not connected";
    }else{

        $id = $_SESSION['username'];
        $sql = "INSERT INTO `experience` (`resume_id`,`company_name`, `duration`, `role`)
         VALUES ('$id','$company_name', '$duration', '$role')";

        $result = mysqli_query($conn, $sql);

    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/exp.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Experiences</title>
   </head>
<body>
  <div class="container">
    <div class="title"><b>Experiences</b></div>
    <div class="content">
      <form action="exp.php" method = "post">
        <div id="addmore" class="user-details">
          <div id = "adde" class="input-box">
            <span class="details">Company Name :</span>
            <input type="text" name = "company_name" placeholder="Write the company name" required>
            <span class="details">Year of Experience :</span>
            <input type="textarea" name = "duration" placeholder=" Duration" required>
            <span class="details">Role in Company :</span>
            <input type="textarea" name = "role" placeholder=" position in company" required>
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
      <a href="cer.php">Prev</a>
    </div>
    <div id="next" class="b">
      <a href="obj.php">Next</a>
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