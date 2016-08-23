<?php
session_start();

$is_logged_in = "";




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

<h1>Welcome to <?php echo $page_title ?></h1>
<a href="new_post.php?board=<?php echo $page_title; ?>">Submit A New Post</a>

<?php
include("db.php");

// get posts
$sql_posts = "SELECT * FROM posts WHERE board = '$page_title'";
$posts = $conn->query($sql_posts);

foreach ($posts as $post) {
	$post_id = $post['post_id'];
	
	echo "<h2><a href='post.php?post_id=$post_id&board=$page_title'>" . $post['post_title'] . "</a></h2>" . 
	"<h3>" . $post['username'] . " | " . $post['date_time'] . "</h3>";

}


?>
<?php include("inc/footer.php"); ?>