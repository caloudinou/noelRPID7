<?php
function addemail($email) {
    $db = new SQLite3("email.db");
 
    $db->exec("create table if not exists emails ( email text not null primary key,
                host text not null,
                time timestamp);");
 
    $stmt = $db->prepare("insert into emails(email, host, time) values (:email,:host,datetime('now', 'localtime'))");
 
    //TODO:check errors. Everywhere. $db->lastErrorCode
    $stmt->bindValue(':host', $_SERVER['REMOTE_ADDR'], SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
 
    $stmt->execute();
 
    $stmt->close();
    $db->close();
}
 
header('Content-Type: text/html; charset=utf-8');
 
if (isset($_POST['courriel'])) {
    addemail($_POST['courriel']);
    echo "Votre demande d’invitation a bien été prise en compte.";
} else {
    echo "Aucun email envoyé.";
}