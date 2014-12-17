<?php
 
$stma = $pdo->prepare("SELECT * FROM participants");
$stma->execute();
$resultat = $stma->fetchAll();
var_dump($resultat);
$melangeMoiCa = array();
$enleveMoiCa = array();
foreach ($resultat as $r){
	$melangeMoiCa[] = $r['id'];
	$enleveMoiCa[] = $r['id_cadeau'];
}
$melangeMoiCa = array_diff($melangeMoiCa, $enleveMoiCa);
shuffle($melangeMoiCa);
$id_cadeau = $melangeMoiCa[0];
if($pdo->lastInsertId() != $id_cadeau){
	$id = $pdo->lastInsertId();
	$stma = $pdo->prepare("INSERT INTO participants (id_cadeau) VALUES (".$id_cadeau.") WHERE id=".$id);
	$stma->execute();
}