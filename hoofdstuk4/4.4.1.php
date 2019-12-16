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
$dagdeel = "undefined";
date_default_timezone_set("Europe/Amsterdam");
$x = date("G")+0;
echo " het is $x uur<BR>";
if ($x >= 0 && $x <= 6){
	$dagdeel = "nacht";
}
else if($x > 6 && $x <= 12){
	$dagdeel = "ochtend";
}
else if($x > 12 && $x <= 18){
    $dagdeel = "middag";
}
else if($x > 18 && $x < 24){
	$dagdeel = "avond";
}
echo "het is $dagdeel";
?>	
</div>
</body>
</html>