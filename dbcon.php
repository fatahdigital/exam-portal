<?php

$localhost = '127.0.0.1';

if ($_SERVER['REMOTE_ADDR'] == $localhost){
    $conn = new mysqli("localhost", "root", "", "fatahcareer");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
else {
    $conn = new mysqli("career.fatah.co", "root", "careerfatah", "fatahcareer");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

?>