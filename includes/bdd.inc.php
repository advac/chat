<?php

//bdd.inc.php

$lien = mysqli_connect('localhost', 'root', '');
if (!$lien)
{
	$erreur = 'Impossible de se connecter au serveur MySQL.';
	echo $erreur;
	exit();
}

if (!mysqli_set_charset($lien, 'utf8'))
{
	$erreur = "Impossible de configurer l'encodage de la connexion à la base de données."; 
	echo $erreur;
	exit();
}

if (!mysqli_select_db($lien, 'siteventeenligne'))
{
	$erreur = 'La base de données est introuvable.';
	echo $erreur;
	exit();
}

?>