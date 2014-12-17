<?php
//new code julien \/
try{
$melangeMoiCa = array();
$enleveMoiCa = array();



//préparation de la requete
$stmta = $pdo->prepare("
                UPDATE participants 
                SET (id_cadeau=:id_cadeau) 
                WHERE id=:id
                ");
/*
foreach ($resultat as $r){
	$melangeMoiCa[] = $r['id'];
	$enleveMoiCa[] = $r['id_cadeau'];
}
$melangeMoiCa = array_diff($melangeMoiCa, $enleveMoiCa);
shuffle($melangeMoiCa);
$id_cadeau = $melangeMoiCa[0];
if($pdo->lastInsertId() != $id_cadeau){
	$id = $pdo->lastInsertId();*/
        
        
       $stmta->execute(array(
           'id_cadeau' =>     1,
           'id' =>     2
       ));
       
       $resultat2 = $stmta->fetchAll();
       
       var_dump($resultat2);
       

    
} catch (Exception $e)
{
    
}
