<?php
session_start();
require('./Configuratie.php');
require('./Modules/Functies.php');

/*
	Opdracht PM04 STAP 2: Verwacht in de bioscoop
	Omschrijving: Roep de functie ConnectDB aan en stop het resultaat in de variabele $pdo
*/
$pdo= ConnectDB();



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Style.css" />
	<title>Cinema 7</title>
</head>
<body>
<header>
	<img src="./Images/logo.jpg" id="Logo" alt="Cinema 7 Logo" />
</header>
<div id="MenuWrapper">
	<nav>
		<?php
			require('./Modules/Menu.php');
		?>
	</nav>
</div>
<div id="MainWrapper">
	<div id="Banner"></div>
	<main>
		<?php
		if(isset($_GET['Pagina'])){
			$pagina= $_GET['Pagina'];
	switch ($pagina) {
case '1':
	require 'Modules/Home.php';
	break;
case '2':
	require 'Modules/Reserveren.php';
	break;
case '3':
	require 'Modules/Inbios.php';
	break;
case '4':
	require 'Modules/Verwacht.php';
	break;
case '5':
	require 'Modules/OverOns.php';
	break;
case '6':
	require 'Modules/Inloggen.php';
	break;
case '7':
	require 'Modules/Data.Tijden.php';
	break;
default:
	require 'Modules/Home.php';
	break;
		};
		}
		echo "<BR> $pagina";
			/*
				Opdracht PM03 STAP 3: Bioscoop Modulair
				Omschrijving: Maak een switch-statement waarin aan de hand van
							  het pagina nr de juiste module wordt geladen
			*/



		?>
	</main>
</div>
</body>
</html>