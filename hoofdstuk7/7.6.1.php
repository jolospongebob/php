<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>test</title>
</head>
<body>
	<div class="sidenav">
	<?php include_once('menu.php')?>
</div>

<!-- Page content -->
<div class="main">
	<button class="btn index" onclick="window.location.href = '../index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = '../page.php';">page</button>
<br>
<br>
<form method="post" action="">
	<label>bedrag ex BTW</label>
	<input type="text" name="nummer">
<br>
	<input type="radio" name="BTW" value="1.21"> 21%
	<input type="radio" name="BTW" value="1.09"> 9%
<br>
	<input type="submit" name="verzenden" value="verzenden">
</form>
<?php
if(isset($_POST['verzenden'])){
$num = filter_input(INPUT_POST, "nummer");

$BTW = filter_input(INPUT_POST, "BTW");
}
if ($BTW == 1.09) {
	$per = 9;
} else if ($BTW == 1.21) {
	$per = 21;
}
echo "$num euro met $per % BTW = ";
echo $num * $BTW;

?>
</div>
</body>
</html>
