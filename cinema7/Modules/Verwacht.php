<?php
/*
	Opdracht PM04 STAP 3: Verwacht in de bioscoop
	Omschrijving: Voer een query uit middels een prepared statement
*/
$dpor= $dpo->prepare("SELECT * FROM `films` where `Status` = 'Verwacht'");
$dpor->execute();
while ($row = $dpor->fetch()) {
	echo $row['Titel'];
	echo "<BR>";
}

/*
	Opdracht PM04 STAP 4: Verwacht in de bioscoop
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond.
*/



?>