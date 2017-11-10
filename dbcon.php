<?php
$conn = new mysqli("localhost", "root", "","fatahcareer");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>