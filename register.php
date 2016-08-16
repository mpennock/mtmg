<?php


$page_title = "register";
include("inc/header.php");

?>

<h1>Register a new Account</h1>
<form action="save_user.php" method="post">
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<label for="confirm_password">Confirm Password: </label>
		<input type="password" name="confirm_password" id="confirm_password">
	</div>
	<div>
		<label for="test">What is the sum of 10, 16 & 2?</label>
		<input type="text" name="test" id="test">
	</div>
	<div>
		<input type="hidden" value="<?php echo date("Y-m-d", time()); ?>" name="reg_date" id="reg_date">
		<input type="submit" value="Register">
	</div>
</form>





<?php
include("inc/footer.php");
?>