<?php

    include("dbcon.php");
    
    $skills = "";
    $dob = "";
    $userid = strtoupper($_POST["userid"]); 
    if(isset($_POST['firstname'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    }
    if(isset($_POST['middlename'])){
            $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
        }
    if(isset($_POST['lastname'])){
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        }
    if(isset($_POST['email'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
        }
    if(isset($_POST['phone'])){
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        }
    if(isset($_POST['dd'])){
            $dd = mysqli_real_escape_string($conn, $_POST['dd']);
            $dob = $dd.'/';
        }
    if(isset($_POST['mm'])){
            $mm = mysqli_real_escape_string($conn, $_POST['mm']);
            $dob = $dob.$mm.'/';
        }
    if(isset($_POST['yyyy'])){
            $yyyy = mysqli_real_escape_string($conn, $_POST['yyyy']);
            $dob = $dob.$yyyy;
        }
    if(isset($_POST['gender'])){
            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        }
    if(isset($_POST['future-plan'])){
            $future_plan = mysqli_real_escape_string($conn, $_POST['future-plan']);
        }
    if(isset($_POST['courses'])){
            $courses = mysqli_real_escape_string($conn, $_POST['courses']);
        }
    if(isset($_POST['communication'])){
        $communication = mysqli_real_escape_string($conn, $_POST['communication']);
        $skills = $skills.$communication.',';
    }
    if(isset($_POST['verbal'])) {
        $verbal = mysqli_real_escape_string($conn, $_POST['verbal']);
        $skills = $skills.$verbal.',';
    }
    if(isset($_POST['written'])) {
        $written = mysqli_real_escape_string($conn, $_POST['written']);
        $skills = $skills.$written.',';
    }
    if(isset($_POST['data_research'])) {
        $data_research = mysqli_real_escape_string($conn, $_POST['data_research']);
        $skills = $skills.$data_research.',';    
    }
    if(isset($_POST['confidence'])) {
        $confidence = mysqli_real_escape_string($conn, $_POST['confidence']);
        $skills = $skills.$confidence.',';
    }
    if(isset($_POST['teamwork'])) {
        $teamwork = mysqli_real_escape_string($conn, $_POST['teamwork']);
        $skills = $skills.$teamwork.',';
    }
    if(isset($_POST['leadership'])) {
        $leadership = mysqli_real_escape_string($conn, $_POST['leadership']);
        $skills = $skills.$leadership.',';
    }
    if(isset($_POST['problemsolving'])) {
        $problemsolving = mysqli_real_escape_string($conn, $_POST['problemsolving']);
        $skills = $skills.$problemsolving.',';
    }
    if(isset($_POST['decision'])) {
        $decision = mysqli_real_escape_string($conn, $_POST['decision']);
        $skills = $skills.$decision.',';
    }
    if(isset($_POST['time'])) {
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $skills = $skills.$time.',';
    }
    if(isset($_POST['responsibility'])) {
        $responsibility = mysqli_real_escape_string($conn, $_POST['responsibility']);
        $skills = $skills.$responsibility.',';
    }
    if(isset($_POST['project'])) {
        $project = mysqli_real_escape_string($conn, $_POST['project']);
        $skills = $skills.$project;
    }
    if(isset($_POST['sem3'])) {
        $sem3 = mysqli_real_escape_string($conn, $_POST['sem3']);
    }
    if(isset($_POST['sem4'])) {
        $sem4 = mysqli_real_escape_string($conn, $_POST['sem4']);
    }
	
    $result = "INSERT INTO `student_info` (`firstname`, `middlename`, `lastname`, `email`, `phone`, `dob`, `gender`, `courses`, `sem3`, `sem4`, `keyskills`, `furtherstudy`, `city`, `user_id`) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$phone', '$dob', '$gender', '$courses', $sem3, $sem4, '$skills', '$future_plan', 'porbandar', '$userid');"; 
	if ($conn->query($result) === TRUE)
	{
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fatah | Exam Portal</title>

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

    h1, h2, h3 {
        text-align: center;
        margin-top: 100px;
    }
    
</style>
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <?php
                    echo "<h1>Thank You.</h1>";
                    echo "<h2>Please note your UserID because you will need it later.</h2>";
                    echo "<h3><b>UserID : ".$userid."</b/></h3>";
                    echo "<h3>Best of Luck for your exams.</h3>";
                ?>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    }
	else
	{
		echo "<script>alert('There was some problem please try again later.')</script>";		
    }
?>