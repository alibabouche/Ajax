<?php

include "connectionPDO.php"; 

$query = $pdo->prepare("SELECT * FROM contacts");

$query->execute();

$allContacts = $query->fetchAll(PDO::FETCH_ASSOC);

$transfertAjax = json_encode($allContacts);

echo $transfertAjax;

?>