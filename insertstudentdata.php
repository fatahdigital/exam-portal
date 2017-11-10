<?php

    include("dbcon.php");
    
    $skills = "";
    $dob = "";
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
	
    $result = "INSERT INTO `student_info` (`firstname`, `middlename`, `lastname`, `email`, `phone`, `dob`, `gender`, `courses`, `sem3`, `sem4`, `keyskills`, `furtherstudy`, `city`) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$phone', '$dob', '$gender', '$courses', $sem3, $sem4, '$skills', '$future_plan', 'porbandar');"; 
	if ($conn->query($result) === TRUE)
	{
		echo "<script>alert('Thank you.');</script>";
 		//echo "<script>window.location='index.html';</script>";
    }
	else
	{
		echo "<script>alert('There was some problem please try again later.')</script>";
        echo $result;
		//echo "<script>window.location='index.html';</script>";		
    }
?>