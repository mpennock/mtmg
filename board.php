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

<?php
include("db.php");

$sql = "SELECT * FROM posts WHERE board = '$page_title'";

$posts = $conn->query($sql);

foreach ($posts as $post) {
	echo "<ul><li>" . $post['date_time'] . "</li>" .
	"<li>" . $post['board'] . "</li>" .
	"<li>" . $post['post_title'] . "</li>" . 
	"<li>" . $post['post_content'] . "</li></ul>";
}
?>
<?php include("inc/footer.php"); ?>