<?php
if (!isset($_GET["board"])) {
	header('Location: index.php');
	exit;
}

if (isset($_GET["board"])) {
	$page_title = $_GET["board"];
}

$boards = array("Movies", "TV", "Music", "Games");

if (!isset($_GET["board"])) {

	echo "Please choose a board from the menu above";
}
include("inc/header.php");
?>

<h1>Welcome to <?php echo $page_title ?></h1>
<a href="post.php?board=<?php echo $page_title; ?>">Submit A New Post</a>

<?php include("inc/footer.php"); ?>