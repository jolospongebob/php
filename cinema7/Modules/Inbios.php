<?php
/*
	Opdracht PM05 STAP 1: Reserveren
	Omschrijving: Voer een query uit middels een prepared statement
*/
$dpor= $pdo->prepare("SELECT * FROM `films` where `Status` = 'InBios'");
$dpor->execute();
while ($row = $dpor->fetch()) {
	echo $row['Titel']."<BR>"."Prijs: €".$row['Prijs']."<BR>"."Genre: ".$row['Genre']."<BR>"."Minimale leeftijd: ".$row['Leeftijd']."<BR>"."lengte: ".$row['Duur']." minuten"."<BR>"."Beschrijving:"."<BR>".$row['Beschrijving']."<BR>"."<HR>";
}



/*
	Opdracht PM05 STAP 2: Reserveren
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond. Zorg er voor dat er een knopje "reserveren" is waarmee je doorgestuurd wordt naar de reserveren pagina
*/



?>