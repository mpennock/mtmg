<?php

// user inputs
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$reg_date = $_POST["reg_date"];
$test = $_POST["test"];

// validation check
$is_valid = true;
$error_message = "";

if (empty($username)) {
	$is_valid = false;
	$error_message = "You need to provide a username <br>";
}
if (empty($password)) {
	$is_valid = false;
	$error_message .= "You need to provide a password <br>";
}
if (empty($confirm_password)) {
	$is_valid = false;
	$error_message .= "You need to confirm your password <br>";
}
if (!empty($password) && !empty($confirm_password) && $password != $confirm_password) {
	$is_valid = false;
	$error_message .= "Make sure your passwords match <br>";
}
if (empty($test) || $test != 28) {
	$is_valid = false;
	$error_message .= "INVALID FORM SUBMISSION<br>";
}


include("db.php");

// see if username already exists
$sql = "SELECT user_id FROM users WHERE username = '$username'";
$result = $conn->query($sql);
// see how many rows our query returns (meaning user already exists)
$count = $result->rowCount();

if ($count > 0) {
	$error_message .= "Sorry, that username already exists. <br>";
	$is_valid = false;
}


if ($is_valid == false) {
	echo $error_message . " <a href='register.php'> <Back to Register</a>";
}

if ($is_valid) {
	$hashed_password = hash('sha512', $password);
	$sql = "INSERT INTO users (reg_date, username, password) VALUES ('$reg_date', '$username', '$hashed_password')";
	$conn->exec($sql);
	$conn = null;
	header("Location: login.php");
}