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
	<label>diameter:</label>
	<input type="text" name="nummer">
	<input type="submit" name="verzenden" value="verzenden">
</form>
 <?php
if(isset($_POST['verzenden'])){
$dia = filter_input(INPUT_POST, "nummer");}
$straal = $dia / 2;
$omtrek = $dia * 3.14159;
$opp = $straal * $straal * 3.14159;

echo "de straal van $dia CM = $straal <BR>";
echo "de omtrek van een cirkel met een diameter van $dia CM= $omtrek CM<BR>";
echo "de oppervlakte van een cirkel met een straal van $straal CM= $opp CM²<BR>";

?>
</div>
</body>
</html>