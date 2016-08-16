<?php
// authentication check
// connect to the existing session
session_start();

// if there is no valid id, redirect back to our login page
if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}

$page_title = $_GET["board"];
$boards = array("movies", "tv", "music", "games");
include("inc/header.php"); 

?>

<form action="save_post.php" method="post">
	<div>
		<label for="board">Posting to...</label>
		<select name="board" id="board">
			<?php foreach ($boards as $board) {
				echo "<option value='$board'";
				if ($board == $page_title) {
					echo " selected='selected'";
				}
				echo ">$board</option>";
			} ?>		
		</select>

	</div>
	<div>
		<label for="post_title">Title</label>
		<input type="text" name="post_title" id="post_title">
	</div>
	<div>
		<label for="post_content">Content</label>
		<textarea name="post_content" id="post_content" cols="60" rows="20"></textarea>
	</div>
	<div>
		<input type="hidden" value="<?php echo date("Y-m-d", time()); ?>" name="date">
		<input type="submit" value="submit">
	</div>
</form>




<?php include("inc/footer.php"); ?>