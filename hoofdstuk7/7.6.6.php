<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
<style type="text/css">
body{

}
red{
  color: #ff0000;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
green{
  color: #00ff00;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
blue{
  color: #0000ff;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
pink{
  color: #ff00ff;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
</style>
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
	<label>getal</label>
	<input type="text" name="nummer">
<br>
<!-- 	<input type="radio" name="reken" value="red"> <red>red</red>
	<input type="radio" name="reken" value="green"> <green>green</green>
	<input type="radio" name="reken" value="blue"> <blue>blue</blue>
	<input type="radio" name="reken" value="pink"> <pink>pink</pink> -->
<!-- <br>
	<label>Korting %</label>
	<input type="text" name="nummer2">
<br>-->
	<input type="submit" name="verzenden" value="bereken">
	<input type="submit" name="clear" value="clear">
</form>
<?php
session_start();
if(isset($_POST['clear'])){
	unset($_SESSION['getallen']);
}
if(isset($_POST['verzenden'])){
$num = filter_input(INPUT_POST, "nummer");
// $num2 = filter_input(INPUT_POST, "nummer2");
// $rek = filter_input(INPUT_POST, "reken");
echo "laatst ingevoerde nummer: $num <BR>";
if (isset($_SESSION['getallen'])) {
	array_push($_SESSION['getallen'], $num);
} else {
	$_SESSION['getallen'] = array();
	array_push($_SESSION['getallen'], $num);
}
print_r($_SESSION["getallen"]);
$sum = array_sum($_SESSION["getallen"]);
$aantal = count($_SESSION["getallen"]);
$gemiddeld = $sum / $aantal;
echo "<BR>";
echo "alle cijfers opgeteld: $sum";
echo "<BR>";
echo "Aantal ingevoerde getallen: $aantal";
echo "<BR>";
echo "gemiddelde: $gemiddeld";
}
?>
</div>
</body>
</html>