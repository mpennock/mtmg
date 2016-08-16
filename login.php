<?php
$page_title = "login";
include("inc/header.php");
?>

<h1>Login</h1>
<form action="process_login.php" method="post">
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<input type="submit" value="Login">
	</div>
</form>
<?php
include("inc/footer.php");
 ?>