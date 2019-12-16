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
$letter1 = chr(64+rand(1, 26));
$letter2 = chr(64+rand(1, 26));

echo "een random postcode is: ";
echo (rand(1000, 9999));
echo "$letter1";
echo "$letter2";
?>
</div>
</body>
</html>