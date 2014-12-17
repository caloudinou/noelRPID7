<?php
//new code julien \/
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
	$stma = $pdo->prepare("
                UPDATE participants 
                SET (id_cadeau=:id_cadeau) 
                
                ");
        
        
       $resultat2= $stma->execute(array(
           'id_cadeau' =>     '2'
       ));
}
