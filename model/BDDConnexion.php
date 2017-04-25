<?php
require_once("../conf/bdd.conf.php");

	try
	{
		$bdd = new PDO('mysql:'.BDD_HOST.';port='.BDD_PORT.';dbname='.BDD_TABLE.';charset=utf8',BDD_USER, BDD_PASSWORD);// Connexion à la base de données
		$SQLReady = true;
	}
	catch (Exception $e)//tester la présence d'erreur
	{
		die('Erreur : ' . $e->getMessage());
	}
