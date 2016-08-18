<?php
// authentication check
// connect to the existing session
session_start();

// if there is no valid id, redirect back to our login page
if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}

$page_title = "Home";
include("inc/header.php");
?>
	<h1>Welcome</h1>
	
<?php include("inc/footer.php"); ?>