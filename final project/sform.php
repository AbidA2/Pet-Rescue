<?php
// Connect to MySQL database
$servername = "sql104.epizy.com";
$username = "epiz_33957393";
$password = "kTOmNCDGynhtLJy";
$dbname = "epiz_33957393_final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pet = $_POST['pet'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO final (name, email, phone, pet, date, time, message)
        VALUES ('$name', '$email', '$phone', '$pet', '$date', '$time', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment scheduled successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>