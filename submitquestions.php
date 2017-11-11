<?php

    include("dbcon.php");
    $score = $_POST['score'];
    $useranswers = $_POST['userAnswers'];
    $userid = strtoupper($_POST['studentid']);
    
    $result = "UPDATE `student_info` SET `score` = $score, `answer` = '$useranswers' WHERE `student_info`.`user_id` = '$userid';";
    
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
                    echo "<h2>Your answers have been recorded. Sit tight, we will provide results shortly.</h2>";
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