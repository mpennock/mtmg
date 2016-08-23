<?php 
// authentication check
// connect to the existing session
session_start();

$user_id = $_SESSION['user_id'];
$comment = addslashes($_POST['comment']);
$post_id = $_POST['post_id'];
$date = $_POST['date'];
$board = $_POST["board"];
$username = "";

include('db.php');

$unquery = "SELECT * FROM users WHERE user_id = '$user_id'";

$user_row = $conn->query($unquery);

foreach ($user_row as $user) {
	$username = $user['username'];
}

$sql = "INSERT INTO comments (post_id, board, comment_date, username, comment_content) VALUES ('$post_id', '$board', '$date', '$username', '$comment')";

$conn->exec($sql);

$conn = null;

header("Location: post.php?board=$board&post_id=$post_id");
