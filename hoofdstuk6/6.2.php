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
	<button class="btn index" onclick="window.location.href = 'index.php';">index</button>
	<button class="btn ervaring" onclick="window.location.href = 'page.php';">page</button>
<br>
<br>
<?php
echo "Naam/locatie van huidige pagina: " . $_SERVER['PHP_SELF'] . "<BR>";
echo "pagina waar u vandaan komt: " . $_SERVER['HTTP_REFERER'] . "<BR>";
echo "Gegevens uit de URL: " . $_SERVER['QUERY_STRING'] . "<BR>";
echo "Informatie over domijn: " . $_SERVER['SERVER_NAME'] . "<BR>" ;
echo "Software op de server: " . $_SERVER['SERVER_SOFTWARE'] . "<BR>";
echo "Uw IP-adres:" . $_SERVER['REMOTE_ADDR'] . "<BR>";
echo "Uw systeem info: " . $_SERVER['HTTP_USER_AGENT'];
?>
</div>
</body>
</html>