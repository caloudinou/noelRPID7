<?php
function addFormulaire($email,$nom,$prenom) {
    $db = new SQLite3("participants.db");
 
    $db->exec("create table if not exists participants ( 
                email text not null primary key,
                nom text not null,
                prenom text not null,
                host text not null,
                time timestamp);");
 
    $stmt = $db->prepare("insert into participants(email, nom, prenom, host, time) values (:email,:nom,:prenom,:host,datetime('now', 'localtime'))");
 
    //TODO:check errors. Everywhere. $db->lastErrorCode
    $stmt->bindValue(':host', $_SERVER['REMOTE_ADDR'], SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':nom', $nom, SQLITE3_TEXT);
    $stmt->bindValue(':prenom', $prenom, SQLITE3_TEXT);
 
    $stmt->execute();
 
    $stmt->close();
    $db->close();
}
 
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST['courriel'])&&isset($_POST['nom'])&&isset($_POST['prenom'])) {
    $email = $_POST['courriel']; 
    $nom   = $_POST['nom']; 
    $prenom= $_POST['prenom']; 
    
    addFormulaire($email,$nom,$prenom);
    echo "Votre demande d’invitation a bien été prise en compte.";
} else {
    echo "formulaire non valide";
}