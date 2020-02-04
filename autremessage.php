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
	$id2 = $objetJS->id2;

	$sql = 'SELECT id_message, id_client, message, time FROM sms WHERE lu = 0 AND id_client = "' . $id2 . '" ORDER BY time;';
	$res = mysqli_query($lien, $sql);
	$tab2 = [];
	while($ligne = mysqli_fetch_array($res))
	{
		$tab2[] = array
		(
			'mess' => $ligne['message'],
			'time' => $ligne['time']
		);
	}

	$sql = 'UPDATE sms SET lu = "1" WHERE lu = 0 AND id_client = "' . $id2 . '";';
	$res = mysqli_query($lien, $sql);
	
	$tabresultat = array
	(
		"id2" => $id2,
		"datas" => $tab2
	);
	$resultat = $objetJSON->encode($tabresultat);
	echo $resultat;
?>