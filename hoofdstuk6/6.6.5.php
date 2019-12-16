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
<form method="post" action="">
	<label>remweg</label>
	<input type="text" name="nummer">
	<input type="submit" name="verzenden" value="verzenden">
</form>
<?php
if(isset($_POST['verzenden'])){
$remweg = filter_input(INPUT_POST, "nummer");
$snelheid = round( sqrt(2 * 5.5 * $remweg) * 3.6 );


echo "snelheid van auto met remweg van $remweg meter is: $snelheid K/M";
}
?>
</div>
</body>
</html>