<?php 

$username = $_POST["username"];
$password = hash('sha512', $_POST['password']);

$valid_login = true;
$error_message = "ERROR: ";

if (empty($username) || empty($password)) {
	$valid_login = false;
	$error_message .= "No email or password provided. ";
}

if ($valid_login == false) {
	echo $error_message;
}

include("db.php");

// see if username already exists
$sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);
// see how many rows our query returns (meaning user already exists)
$count = $result->rowCount();

// see if our row count is equal to at least 1, meaning the user exists in our table
if ($count >= 1) {
    
    // access users server session
    session_start();
    
    foreach ($result as $row) {
        // get the id from the table and store it in the session object
        $_SESSION['user_id'] = $row['user_id'];
        
        // redirect to users page
        header('location:index.php');
    }
}
else {
    echo 'Invalid username or password';
}
?>