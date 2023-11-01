<?php
require_once 'db.inc.php';

function getHobbies($username) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT hobby_name FROM Hobbies WHERE username = ?");
    $stmt->execute([$username]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addHobby($username, $hobby) {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO Hobbies (username, hobby_name) VALUES (?, ?)");
    return $stmt->execute([$username, $hobby]);
}

function updateHobby($username, $oldHobby, $newHobby) {
    global $pdo;

    $stmt = $pdo->prepare("UPDATE Hobbies SET hobby_name = ? WHERE username = ? AND hobby_name = ?");
    return $stmt->execute([$newHobby, $username, $oldHobby]);
}

function deleteHobby($username, $hobby) {
    global $pdo;

    $stmt = $pdo->prepare("DELETE FROM Hobbies WHERE username = ? AND hobby_name = ?");
    return $stmt->execute([$username, $hobby]);
}
?>
