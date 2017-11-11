<?php
    
    include("dbcon.php");

    $sql = "SELECT user_id, score, answer FROM student_info ORDER BY student_id DESC;";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>UserID: " . $row["user_id"]. " | Score: " . $row["score"]. " | Answers " . $row["answer"]. "<br></p>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>

<style>

    body {
        font-size: 20px;
        font-family: serif;
    }
    p {
        margin: 5px;
    }
    
</style>