<?php
/*
	Opdracht PM05 STAP 1: Reserveren
	Omschrijving: Voer een query uit middels een prepared statement
*/


$dpor= $pdo->prepare("SELECT * FROM `films` where `Status` = 'InBios'");
$dpor->execute();
	echo "<table border=1>";
	echo "<TR>";
	echo "<TH scope='col'>"."Titel"."</TH>";
	echo "<TH scope='col'>"."Prijs"."</TH>";
	echo "<TH scope='col'>"."Genre"."</TH>";
	echo "<TH scope='col'>"."Leeftijd"."</TH>";
	echo "<TH scope='col'>"."Lengte"."</TH>";
	echo "<TH scope='col'>"."Reserveren"."</TH>";
	echo "</TR>";
	
while ($row = $dpor->fetch()) {

	echo "<TR>";
	echo "<TH scope='row'>".$row['Titel']."</TH>";
	echo "<TD>".$row['Prijs']." euro"."</TD>";
	echo "<TD>".$row['Genre']."</TD>";
	echo "<TD>".$row['Leeftijd']."</TD>";
	echo "<TD>".$row['Duur']." min"."</TD>";
	echo "<TD>"."<form action='index.php?Pagina=7' method='GET'>"."<input type='submit' name='Button' value='Reserveren'>"."<input type='hidden' name='Pagina' value='7'>"."<input type='hidden' name='film' value='".$row['FilmID']."'>"."</form>"."</TD>";
	echo "</TR>";

}
	echo "</table>";



/*
	Opdracht PM05 STAP 2: Reserveren
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond. Zorg er voor dat er een knopje "reserveren" is waarmee je doorgestuurd wordt naar de reserveren pagina
*/



?>