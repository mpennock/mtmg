<?php 

$is_logged_in = "";

if(!empty($_SESSION['user_id'])) {
    $is_logged_in = true;
} else if (empty($_SESSION['user_id'])) {
	$is_logged_in = false;
} 

// get username
function getusername() {
	$user_id = $_SESSION['user_id'];
	include('db.php');
	$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
	$users = $conn->query($sql);

	foreach ($users as $user) {
		$username = $user['username'];
		return $username;
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title ?></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
	<div class="flex-wrapper navbar">
		<h1 class="box">MTMG</h1>
		<nav class="box">
			<ul class="flex-wrapper">
				<li><a href="index.php">Home</a></li>
				<li><a href="board.php?board=movies">Movies</a></li>
				<li><a href="board.php?board=tv">TV</a></li>
				<li><a href="board.php?board=music">Music</a></li>
				<li><a href="board.php?board=games">Games</a></li>	
			</ul>
		</nav>
		<nav class="box">
			<ul class="flex-wrapper">
				<?php if ($is_logged_in == true) {
					echo "<li>Welcome, &nbsp;<b>" . getusername() . "!</b></li><li><a href='logout.php'> Logout</a></li>";
				} else {
					echo "<li><a href='login.php'>Login</a></li>" . 
					"<li><a href='register.php'>Register</a></li>";
				}
				?>
				
			</ul>

		</nav>		
	</div>
</header>
<main>