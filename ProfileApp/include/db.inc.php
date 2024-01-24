<?php

// This is where your database is
$dsn= "mysql:host=localhost;dbname=users";

// This is the username to get into your database
$dbusername="root";

// This is the password to get into your database
$dbpass="root";

// Now we try to connect to the database
try {
    // We make a new connection with the location, username, and password
    $pdo= new pdo($dsn,$dbusername,$dbpass);

    // If something goes wrong, we want to know about it
    $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If we couldn't connect, we get a message telling us why
    echo "connection failed:" . $e->getMessage();
}
