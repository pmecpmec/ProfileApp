<?php

require_once "db.inc.php";

function getUser($username) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
