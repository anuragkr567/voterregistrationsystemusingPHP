<?php
$conn = new mysqli("localhost", "root", "845417", "voter_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
