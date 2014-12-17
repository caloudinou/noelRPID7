<?php

try {
    //include 'connection.php';
    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:'.dirname(__FILE__).'/bd/participants.sqlite');
    // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
    //$db = new SQLite3;
    //
    // Select all data from file db messages table
    $resultat = $file_db->query('SELECT * FROM participants');
    echo $resultat;
    //$db=sqlite_open('bd/participants.sqlite', 0666, $error);
    //$db = new PDO('sqlite:'.dirname(__FILE__).'/bd/participants.sqlite');
    //$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
    
    //$statement->bindValue(':id', $id);


    //préparation de la requete insertion dans la bdd
    //$statement = $db->prepare("
    //                        SELECT * FROM participants
    //                      ");
    //$resultat = $statement->execute();
    
    
    //$red = $sth->fetchAll();
    }
  catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }