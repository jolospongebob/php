<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>test</title>
</head>
<body>
	<div class="sidenav">
	<?php include_once('menuhoofdstuk6.php')?>
</div>

<!-- Page content -->
<div class="main">
	<button class="btn index" onclick="window.location.href = '../index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = '../page.php';">page</button>
<br>
<br>
<!-- <form method="post" action="">
	<label>diameter:</label>
	<input type="text" name="nummer">
	<input type="submit" name="verzenden" value="verzenden">
</form> -->
 <?php
session_start();
if(isset($_SESSION['hits'])){
	$_SESSION['hits']++;
	$i = $_SESSION['hits'];
	echo "you have visited this page $i times.";
} else {
	$_SESSION['hits'] = 1;
	$i = $_SESSION['hits'];
	echo "you have visited this page $i times.";
}
?>
</div>
</body>
</html>