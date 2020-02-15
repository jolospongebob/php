<?php
/*
	Opdracht PM04 STAP 3: Verwacht in de bioscoop
	Omschrijving: Voer een query uit middels een prepared statement
*/
$dpor= $pdo->prepare("SELECT * FROM `films` where `Status` = 'Verwacht'");
$dpor->execute();
while ($row = $dpor->fetch()) {
	echo $row['Titel']."<BR>"."Prijs: €".$row['Prijs']."<BR>"."Genre: ".$row['Genre']."<BR>"."Minimale leeftijd: ".$row['Leeftijd']."<BR>"."lengte: ".$row['Duur']." minuten"."<BR>"."Beschrijving:"."<BR>".$row['Beschrijving']."<BR>"."<HR>";
}

/*
	Opdracht PM04 STAP 4: Verwacht in de bioscoop
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond.
*/



?>