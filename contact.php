<?php

/*if(isset($_POST["lastName"]) && isset($_POST["firstName"]) && isset($_POST["phone"] && !empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["phone"])))
{*/
	$lastName = $_POST["nom"];
	$firstName = $_POST["prenom"];
	$phone = $_POST["telephone"];
	
	$orders = [$lastName, $firstName, $phone];

	echo $lastName;

	/*include "connectionPDO.php";

	$query = $pdo->prepare("
		INSERT INTO contacts
		VALUES(?, ?, ?)");

	$query->execute([$lastName, $firstName, $phone]);*/

//}
	


?>