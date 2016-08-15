<?php 
$page_title = $_GET["board"];
$boards = array("movies", "tv", "music", "games");
include("inc/header.php"); 

?>

<form action="board.php" method="post">
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
		<input type="submit" value="submit">
	</div>
</form>




<?php include("inc/footer.php"); ?>