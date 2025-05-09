<?php
include 'db.php';

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$voter_id = $_POST['voter_id'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$photo_name = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp, "uploads/$photo_name");

$sql = "INSERT INTO voters (full_name, email, voter_id, password, dob, gender, address, photo)
        VALUES ('$full_name', '$email', '$voter_id', '$password', '$dob', '$gender', '$address', '$photo_name')";

if ($conn->query($sql)) {
    echo "Registration successful.";
} else {
    echo "Error: " . $conn->error;
}
?>
