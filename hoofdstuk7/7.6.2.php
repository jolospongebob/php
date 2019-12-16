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
	<label>getal 1</label>
	<input type="text" name="nummer">
<br>
	<input type="radio" name="reken" value="+"> Optellen
	<input type="radio" name="reken" value="-"> Aftrekken
	<input type="radio" name="reken" value="*"> Vermenigvuldigen
	<input type="radio" name="reken" value="/"> Delen
<br>
	<label>getal 2</label>
	<input type="text" name="nummer2">
<br>
	<input type="submit" name="verzenden" value="berekenen">
</form>
<?php
if(isset($_POST['verzenden'])){
$num = filter_input(INPUT_POST, "nummer");
$num2 = filter_input(INPUT_POST, "nummer2");
$rek = filter_input(INPUT_POST, "reken");

echo "$num $rek $num2 = ";

if($rek == "+"){
	echo $num + $num2;
} else if($rek == "-"){
	echo $num - $num2;
} else if($rek == "*"){
	echo $num * $num2;
} else if($rek == "/"){
	echo $num / $num2;
}

};
?>
</div>
</body>
</html>
