<?php
//access our existijng session
session_start();

//remove session variables
session_unset();

//kill the session
session_destroy();

//redirect to our login page
header('location:login.php');