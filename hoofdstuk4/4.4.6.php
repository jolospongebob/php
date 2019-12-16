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
$airco = "undefined";
$temp = "15";
$vocht = "80";
date_default_timezone_set("Europe/Amsterdam");
$x = date("G")+0;
echo " het is $x uur<BR>";

if($x >= 17 || $temp < 20 && $vocht < 85){
	$airco = "uit";
} else {
	$airco = "aan";
}

echo "temperatuur is $temp ℃ <BR>";
echo "vochtgehalte is $vocht % <BR>";
echo "Airco: $airco";
?> 
</div>
</body>
</html>