<?php
$conn = new PDO('mysql:host=localhost;dbname=ploop', 'root', '');

$sql = "SELECT * FROM posts";

$posts = $conn->query($sql);

foreach ($posts as $post) {
	echo "<ul>
	<li>$post['date_time']</li>
	<li>$post['board']</li>
	<li>$post['post_title']</li>
	<li>$post['post_title']</li>
	<ul>";
}
