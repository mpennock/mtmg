<?php
session_start();
$date_time = $_POST["date"];
$title = $_POST["post_title"];
$content = addslashes($_POST["post_content"]);
$board = $_POST["board"];
$user_id = $_SESSION['user_id'];

include("db.php");
$unquery = "SELECT * FROM users WHERE user_id = '$user_id'";

$user_row = $conn->query($unquery);
foreach ($user_row as $user) {
	$username = $user['username'];
}

$sql = "INSERT INTO posts (date_time, board, post_title, post_content, username) VALUES ('$date_time', '$board', '$title', '$content', '$username')";

$conn->exec($sql);

$conn = null;

header("Location: board.php?board=$board");