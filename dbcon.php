<?php

if ($_SERVER['SERVER_NAME'] == 'localhost'){
    $conn = new mysqli("localhost", "root", "", "fatahcareer");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
else {
    $conn = new mysqli("localhost", "root", "careerfatah", "fatahcareer");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}


?>
