<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
  $servername = "localhost";
  $username = "root";
  $passward = "";
  $database = "resume-builder";


  $conn = mysqli_connect($servername, $username, $passward, $database);

  if(!$conn){
      echo "not connected";
  }else{

    $username1 = $_SESSION['username'];

// user
    $sql = "Select * from `user` where `username` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $user = mysqli_fetch_assoc($result);
    // echo $user['full_name'];

// certificate
    $sql = "Select * from `certificates` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $certificates = mysqli_fetch_assoc($result);
    // echo $certificates['resume_id'];
  
// ."\n"
// degree
    $sql = "Select * from `degree_qual` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $degree = mysqli_fetch_assoc($result);
    // echo $degree['resume_id'] ."\n";

// experience
    $sql = "Select * from `experience` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $experience = mysqli_fetch_assoc($result);
    // echo $experience['resume_id'] ."\n";

// project

    $sql = "Select * from `project` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $project = mysqli_fetch_assoc($result);
    // echo $project['resume_id'] ."\n";

// resume
    $sql = "Select * from `resume_details` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $resume = mysqli_fetch_assoc($result);
    // echo $resume['resume_id'] ."\n";

// tenth
    $sql = "Select * from `tenth_details` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $tenth = mysqli_fetch_assoc($result);
    // echo $tenth['resume_id'] ."\n";

// twelfth
    $sql = "Select * from `twelfth_details` where `resume_id` ='$username1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $twelfth = mysqli_fetch_assoc($result);
    // echo $twelfth['resume_id'] ."\n";


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="Style/template.css" >
</head>

<body>
    <div class="makepdf">
        <div class="full">
            <div class="left">
                <div class="image">
                    <img src="" style="width:100px;height:100px;">
                </div>
                <div class="Contact">
                    <h2>Contact</h2>
                    <p><b>Email id:</b><?php echo $user['email']; ?></p>
                    <p><b>Mobile no :</b><?php echo $user['phone_number']; ?></p>
                    <p><b>Address :</b><?php echo $user['address']; ?></p>
                </div>
                <div class="Skills">
                    <h2>Skills</h2>
                    <p><?php echo $resume['skills']; ?></p>
                </div>
                <div class="interests">
                    <h2>Interests</h2>
                    <p><?php echo $resume['interests']; ?></p>
                </div>
                <div class="Language">
                    <h2>Language</h2>
                    <p><?php echo $resume['languages']; ?></p>
                </div>
            </div>
            <div class="right">
                <div class="name">
                    <h1><?php echo $user['full_name']; ?></h1>
                </div>
                <div class="title">
                    <p>Student</p>
                </div>
                <div class="objective">
                    <h2>Objective</h2>
                        <p><?php echo $resume['objective']; ?></p>
        
                </div>
                <div class="Education">
                    <h2>Education</h2>
                    <ul>
                        <li><b>Degree</b>
                            <ul>
                                <li><?php echo $degree['college_name']; ?></li>
                                <li><?php echo $degree['branch']; ?></li>
                                <li><?php echo $degree['cgpa_percentage']; ?></</li>
                                <li><?php echo $degree['passing_year']; ?></</li>
                            </ul>
                        </li>
                        <li><b>12th</b>
                            <ul>
                                <li><?php echo $twelfth['school_name']; ?></</li>
                                <li><?php echo $twelfth['stream']; ?></li>
                                <li><?php echo $twelfth['board']; ?></li>
                                <li><?php echo $twelfth['percentage']; ?></li>
                                <li><?php echo $twelfth['passing_year']; ?></li>
                            </ul>
                        </li>
                        <li><b>10th</b>
                            <ul>
                                <li><?php echo $tenth['school_name']; ?></li>
                                <li><?php echo $tenth['board']; ?></li>
                                <li><?php echo $tenth['cgpa_percentage']; ?></li>
                                <li><?php echo $tenth['passing_year']; ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="certificates">
                    <h2>Certificates</h2>
                    <ul>
                        <li><b> <?php echo $certificates['certificate_name'] ." " .$certificates['certificate_type'] ; ?> </b> </li>
                    </ul>
                </div>
                
                <div class="Experience">
                    <h2>Experience</h2>
                    <ul>
                     <li><b><?php echo $experience['company_name']; ?></b>
                        <p><?php echo $experience['duration']; ?></p>
                        <p><?php echo $experience['role']; ?></p></li>
                    </ul>
                </div>
                <div class="project">
                    <h2>Project</h2>
                    <ul>
                        <li><?php echo $project['title']; ?>
                            <p><?php echo $project['description']; ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="button">
         <button onclick="window.print()" >Download</button> 
    </div>
</body>

</html>
