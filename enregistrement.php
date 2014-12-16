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