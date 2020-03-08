<?php
function login($Username, $password, $pdo)
{
	/*
	Opdracht PM07 STAP 4: Inlogsysteem
	Omschrijving: Maak een prepared statement waarbij je de gegevens van de klant ophaalt
	*/
	$sth= $pdo->prepare("SELECT * FROM klanten where Inlognaam = '$Username'");
	$sth->execute();

	/*
	Opdracht PM07 STAP 5: Inlogsysteem
	Omschrijving: Voorzie de komende regels van commentaar, zoals in de opdracht gevraagd wordt.
	*/

	if ($sth->rowCount() == 1) 
	{
		// Variabelen inlezen uit query
		$row = $sth->fetch();
		

		$password = hash('sha512', $password . $row['Salt']);


		if ($row['Wachtwoord'] == $password) 
		{

			$user_browser = $_SERVER['HTTP_USER_AGENT'];

			/*
			Opdracht PM07 STAP 6: Inlogsysteem
			Omschrijving: Vul tot slot de sessie met de juiste gegevens
			*/
			$_SESSION['user_id'] = $row["$KlantID"];
			$_SESSION['username'] = $row["$Inlognaam"];
			$_SESSION['level'] = $row["$Level"];
			$_SESSION['login_string'] = hash('sha512',
					  $password . $user_browser);
			
			// Login successful.
			return true;
		 } 
		 else 
		 {
			// password incorrect
			return false;
		 }
	}
	else
	{
		// username bestaat niet
		return false;
	}
}

//begin pagina

//het knopje inloggen van het formulier is ingedrukt.
if(isset($_POST['Inloggen']))
{
	/*
	Opdracht PM07 STAP 2: Inlogsysteem
	Omschrijving: Lees de formulier gegevens uit middels de post methode. 
	*/
	$name = $_POST['username'];
	$password = $_POST['password'];

	
	/*
	Opdracht PM07 STAP 3: Inlogsysteem
	Omschrijving: Roep de functie login aan en geef de 3 correcte paramteres mee aan de functie. Middels een if statement kun je vervolgens controleren of de gebruiker is ingelogd en de juiste boodschap weergeven
	*/
	if (login($name, $password, $pdo)) {
		echo "u bent ingelogd";
		RedirectNaarPagina(3, 1);
	} else {
		echo "de inlognaam of wachtwoord is fout";
	}



}
else
{	
	//er is nog niet op het knopje gedrukt, het formulier wordt weergegeven
	require('./Forms/InloggenForm.php');
}
?>





