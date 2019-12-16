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
	<button class="btn index" onclick="window.location.href = '6.4-index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = '6.4-page.php';">page</button>
<br>
<br>
<?php
setcookie("shoppingcart",
			"10* bezemsteel 1M",
			time() + 3600);
if(isset($_COOKIE['shoppingcart'])) {
	echo "Cookie bestaat <BR>";
} else {
	echo "Cookie bestaat niet <BR>";
}
	echo "shopping list saved";
?>
</div>
</body>
</html>