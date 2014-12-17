<?php
 
$stma = $pdo->prepare("SELECT * FROM participants");
$stma->execute();
$resultat = $stma->fetchAll();
print_r($resultat);