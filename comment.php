<?php
// authentication check
// connect to the existing session
session_start();

$post_id = $_GET['post_id'];
$board = $_GET['board'];

echo $board;

// if there is no valid id, redirect back to our login page
if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}

include("inc/header.php");

include("db.php");

$sql = "SELECT * FROM posts WHERE post_id = '$post_id'";

$posts = $conn->query($sql);

foreach ($posts as $post) {
	echo "<h2>Responding to " . $post['username'] . "'s Post</h2>" . 
	"<h3>" . $post['post_title'] . "</h3>" .
	"<p>" . $post['post_content'] . "</p>";
}
?>

<form action="process_comment.php" method="post">
	<div>
		<label for="comment">Your Response: </label>
		<textarea name="comment" id="comment" cols="50" rows="10"></textarea>
	</div>
	<div>
		<input type="hidden" value="<?php echo $post_id ?>" name="post_id">
		<input type="submit" value="Submit">
		<input type="hidden" value="<?php echo $board ?>" name="board" id="$board">
		<input type="hidden" value="<?php echo date("Y-m-d", time()); ?>" name="date">
	</div>
</form>


<?php include("inc/footer.php") ?>