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
echo "inhoud winkelwagen: " . $_COOKIE['shoppingcart'];
?>
</div>
</body>
</html>