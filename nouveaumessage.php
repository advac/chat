<?php
	header("Content-Type: text/plain ; charset=utf-8");
	header("Cache-Control: no-cache , private");
	header("Pragma: no-cache");

	$racine = $_SERVER['DOCUMENT_ROOT'] . '/chat/';
	include $racine . 'includes/bdd.inc.php';

	$parametersJSON = file_get_contents("php://input");
	require_once("JSON.php");
	$objetJSON = new Services_JSON();
	$objetJS = $objetJSON->decode($parametersJSON);
	$id = $objetJS->id;
	$mess = $objetJS->mess;
	$time = $objetJS->time; //rappel du format: "2018-02-28 12:25:25"
	$id2 = $objetJS->id2;
	$sql = 'INSERT INTO sms (id_message, id_client, message, time, lu) VALUES (NULL, "' . $id . '", "' . $mess . '", "' . $time . '", "0");';
	$res = mysqli_query($lien, $sql);
	$tabresultat = array
	(
		"id2" => $id2
	);
	$resultat = $objetJSON->encode($tabresultat);
	echo $resultat;
?>