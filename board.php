<?php
session_start();

$is_logged_in = "";

if(!empty($_SESSION['user_id'])) {
    $is_logged_in = true;
} else if (empty($_SESSION['user_id'])) {
	$is_logged_in = false;
}

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

// get posts
$sql_posts = "SELECT * FROM posts WHERE board = '$page_title'";
$posts = $conn->query($sql_posts);

// get comments
$sql_comments = "SELECT * FROM comments WHERE board = '$page_title'";
$comments = $conn->query($sql_comments);

foreach ($posts as $post) {
	$post_id = $post['post_id'];

	echo "<h2>" . $post['post_title'] . "</h2>" . 
	"<h3>" . $post['username'] . " | " . $post['date_time'] . "</h3>" . 
	"<p>" . $post['post_content'] . "</p>";
	if ($is_logged_in == true) {
		echo "<ul><li><a href='comment.php?post_id=$post_id&board=$page_title'>Respond</a></li></ul>";
	}
	foreach ($comments as $comment) {
		if ($comment['post_id'] == $post_id) {
			$comment_id = $comment['comment_id'];
			echo "<p>" . $comment['comment_content'] . "</p>";
			echo "<ul><li><a href='comment.php?post_id=$post_id&board=$page_title&comment_id=$comment_id'>Respond</a></li></ul>";
		}
	}
}


?>
<?php include("inc/footer.php"); ?>