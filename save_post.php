<?php
$date_time = $_POST["date"];
$title = $_POST["post_title"];
$content = $_POST["post_content"];
$board = $_POST["board"];

$conn = new PDO('mysql:host=localhost;dbname=ploop', 'root', '');

$sql = "INSERT INTO posts (date_time, board, post_title, post_content) VALUES ('$date_time', '$board', '$title', '$content')";

$conn->exec($sql);

$conn = null;

header("Location: board.php?board=$board");