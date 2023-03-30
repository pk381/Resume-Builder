
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  // 12th
    $stream = $_POST['stream'];
    $percentage = $_POST['percentage'];
    $board12 = $_POST['board12'];
    $school12 = $_POST['school12'];
    $passing_year12 = $_POST['passing_year12'];

    // degree
    $degree = $_POST['degree'];
    $college_name = $_POST['college_name'];
    $branch = $_POST['branch'];
    $cgpa = $_POST['cgpa'];
    $passing_year = $_POST['passing_year'];

    // 10th
    $cgpa10 = $_POST['cgpa10'];
    $board10 = $_POST['board10'];
    $school10 = $_POST['school10'];
    $passing_year10 = $_POST['passing_year10'];
    
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

      $sql = "INSERT INTO `twelfth_details` (`resume_id`,
       `stream`,
      `percentage`,
      `board`,
      `school_name`,
      `passing_year`)
        VALUES (
      '$id',
      '$stream',
      '$percentage',
        '$board12',
      '$school12',
      '$passing_year12')";

      $result = mysqli_query($conn, $sql);

      $sql2 = "INSERT INTO `degree_qual` (`resume_id`, `degree`, `college_name`, `branch`, `cgpa_percentage`, `passing_year`) VALUES ('$id', '$degree', '$college_name', '$branch', '$cgpa', 'passing_year')";

      $result2 = mysqli_query($conn, $sql2);

      $sql3 = "INSERT INTO `tenth_details` (`resume_id`, `cgpa_percentage`, `board`, `school_name`, `passing_year`) VALUES ('$id', '$cgpa10', '$board10', '$school10', '$passing_year10')";

      $result3 = mysqli_query($conn, $sql3);

    }
   
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/edu_details.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Qualification</title>
   </head>
<body>
  <div class="container">
    <div class="title">Qualification</div>
    <div class="content">
      <form action="edu_details.php" method="post">
         <div class="user-details">
          
            <span class="que">Degree:</span>
           
          <div class="input-box">
            <span class="details">Degree:</span>
            <input type="text" name = "degree" placeholder="Enter degree name" >
            <span class="details">College Name:</span>
            <input type="text" name = "college_name" placeholder="Enter college name" >
            <span class="details">Branch:</span>
            <input type="text" name = "branch" placeholder="Enter branch name" >
            <span class="details">CGPA/Percentage:</span>
            <input type="text" name = "cgpa" placeholder="Enter CGPA / %" >
            <span class="details">Passing Year:</span>
            <input type="text" name = "passing_year" placeholder="Enter passing year" >
            
        </div>

        <span class="que">12th:</span>

        <div class="input-box">
            <span class="details">Stream:</span>
            <input type="text" name = "stream" placeholder="Enter stream name" >
            <span class="details">Percentage:</span>
            <input type="text" name = "percentage" placeholder="Enter percentage" >
            <span class="details">Board:</span>
            <input type="text" name = "board12" placeholder="Enter board name" >
            <span class="details">School Name:</span>
            <input type="text" name = "school12" placeholder="Enter school name" >
            <span class="details">Passing Year:</span>
            <input type="text" name = "passing_year12" placeholder="Enter passing year" >
        </div>

        <span class="que">10th:</span>    
        <div class="input-box">
            <span class="details">CGPA/Percentage:</span>
            <input type="text" name = "cgpa10" placeholder="Enter CGPA / %" >
            <span class="details">Board:</span>
            <input type="text" name = "board10" placeholder="Enter board name" >
            <span class="details">School Name:</span>
            <input type="text" name = "school10" placeholder="Enter school name" >
            <span class="details">Passing Year:</span>
            <input type="text" name = "passing_year10" placeholder="Enter passing year" >
        </div>

       
        </div>
        <div class="button">
          <input type="submit" value="Submit" onclick="save()">
        </div>
      </form>
    </div>
    <div id="next" class="button">
        <a href="skill.php">Next</a>
        </div>
        <div id="prev" class="button">
        <a href="personal_details.php">Prev</a>
        </div>
  </div>
  
</body>
<script>
  function save()
  {
    alert("Data Saved Successfully \nPlease Proceed Further");
  }
</script>
</html>