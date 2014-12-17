<?php

$pdo->query("
        CREATE TABLE IF NOT EXISTS participants (
        id                      INTEGER         PRIMARY KEY AUTOINCREMENT,
        email                   VARCHAR( 450 ) UNIQUE,
	nom			TEXT NOT NULL,
	prenom			TEXT NOT NULL,
	ip			TEXT,
	proxy			TEXT,
	useragent		TEXT,
	referror		TEXT,
	time			TIMESTAMP

);");