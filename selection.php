<?php
 
$stma = $pdo->prepare("SELECT * FROM participants");
$stma->execute();
$resultat = $stma->fetchAll();
//var_dump($resultat);