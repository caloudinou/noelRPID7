<?php
function randomPD($id)
{
        include 'selection.php';


	$melangeMoiCa = array();
	$enleveMoiCa = array();
	//PARCOURS TOUS LES PARTICIPANTS
	foreach ($resultat as $r){
		$melangeMoiCa[] = $r['id']; //RECUPERE TOUS LES ID
		$enleveMoiCa[] = $r['id_cadeau']; //RECUPERE TOUS LES ID DEJA SELECTIONNES
	}
	$melangeMoiCa = array_diff($melangeMoiCa, $enleveMoiCa); //ENLEVE TOUS LES ID DEJA SELECTIONNES

	shuffle($melangeMoiCa); //MELANGE LE TABLEAU DES ID NON SELECTIONNES
	$id_cadeau = $melangeMoiCa[0]; //PRENDS LE PREMIER ELEMENT DU TABLEAU
	if($id != $id_cadeau){ //SI L'ID EST DIFFERENT DE L'ID DE L'ID SELECTIONNE
		$stma = $pdo->prepare("UPDATE participants SET id_cadeau='".$id_cadeau."' WHERE id='".$id."'");
		$stma->execute();
	}else{ // RAPPELLE LA FONCTION JUSQU A QUE L'ID SOIT DIFFERENT
		return randomPD($id);
	}
}