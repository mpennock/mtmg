<?php
session_start();

if (!isset($_GET["board"])) {
	header('Location: index.php');
	exit;
}

if (isset($_GET["board"])) {
	$page_title = $_GET["board"];
}

if (!isset($_GET["board"])) {

	echo "Please choose a board from the menu above";
}
include("inc/header.php");
?>

<h1 class="board-header">Welcome to <?php echo $page_title ?></h1>
<div class="new-post-submit">
	<a href="new_post.php?board=<?php echo $page_title; ?>">Submit New Post</a>	
</div>


<?php
include("db.php");

// get posts
$sql_posts = "SELECT * FROM posts WHERE board = '$page_title'";
$posts = $conn->query($sql_posts);

foreach ($posts as $post) {
	$post_id = $post['post_id'];
	
	echo "<div class='post'><h2><a href='post.php?post_id=$post_id&board=$page_title'>" . $post['post_title'] . "</a></h2>" . 
	"<h3>" . $post['username'] . " | " . $post['date_time'] . "</h3></div>";

}


?>
<?php include("inc/footer.php"); ?>