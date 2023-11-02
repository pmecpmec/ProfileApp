<?php

$dsn= "mysql:host=localhost;dbname=users";
$dbusername="root";
$dbpass= "Realmadridnumber1!";

try {
    $pdo= new pdo($dsn,$dbusername,$dbpass);
    $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed:" . $e->getMessage();
}

