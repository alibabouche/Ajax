<?php

	$lastName = trim($_POST["nom"]);
	$firstName = trim($_POST["prenom"]);
	$phone = trim($_POST["telephone"]);

	//if pour éviter les champs vide qui peuvent spamer la bdd, si l'user click bcp sur le bouton
	if(!empty($lastName) && !empty($firstName) && !empty($phone))
	{	
		include "connectionPDO.php";

		$query = $pdo->prepare("
			INSERT INTO contacts
			VALUES(?, ?, ?)");

		$query->execute([$lastName, $firstName, $phone]);

		echo $lastName." ".$firstName." ".$phone;
	}
	else
	{
		echo "1";
	}

?>