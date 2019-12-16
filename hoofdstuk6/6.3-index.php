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
	<button class="btn index" onclick="window.location.href = '6.3-index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = '6.3-page.php';">page</button>
<br>
<br>
<?php
SESSION_START();

$_SESSION['login'] = true;
$_SESSION['username'] = "bert";

echo "SESSION vars zijn aangemaakt.";
?>
</div>
</body>
</html>