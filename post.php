<?php
// authentication check
// connect to the existing session
session_start();

if(!empty($_SESSION['user_id'])) {
    $is_logged_in = true;
} else if (empty($_SESSION['user_id'])) {
	$is_logged_in = false;
}

$page_title = $_GET["board"];
$post_id = $_GET['post_id'];

include("inc/header.php");
include("db.php");

echo "<h1><a href='board.php?board=$page_title'>$page_title</a></h1>";
// get post
$sql_posts = "SELECT * FROM posts WHERE post_id = '$post_id'";
$posts = $conn->query($sql_posts);

foreach ($posts as $post) {
	echo "<div class='post'><h2>" . $post['post_title'] . "</h2>" .
	"<h3>" . $post['username'] . " | " . $post['date_time'] . 
	"<div>" . $post['post_content'] . "</div>";
	if ($is_logged_in == true) {
		echo "<ul><li><a href='comment.php?post_id=$post_id&board=$page_title'>Respond</a></li></ul>";
	}
	echo "</div>";
}

// get comments
$sql_comments = "SELECT * FROM comments WHERE post_id = '$post_id'";
$comments = $conn->query($sql_comments);

foreach ($comments as $comment) {
	echo "<div class='comment'><h4>" . $comment['username'] . " says:</h4>" . 
	"<div>" . $comment['comment_content'] . "</div></div>";
}


include("inc/footer.php"); ?>