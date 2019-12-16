<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>test</title>
</head>
<body>
	<div class="sidenav">
	<?php include_once('menuhoofdstuk4.php')?>
</div>
<!-- Page content -->
<div class="main">
	<button class="btn index" onclick="window.location.href = '../index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = '../page.php';">page</button>
<br>
<br>
<?php
	$zijde1 = 3;
	$zijde2 = 2;
	$zijde3 = 3;
	$kan = "undefined";

if($zijde1 == $zijde2 && $zijde2 == $zijde3 && $zijde3 == $zijde1){
	$kan = "kan wel";
} else {
	$kan = "kan niet";
}

echo "zijde 1: $zijde1 cm <BR>";
echo "zijde 2: $zijde2 cm <BR>";
echo "zijde 3: $zijde3 cm <BR>";
echo "$kan";

?> 
</div>
</body>
</html>