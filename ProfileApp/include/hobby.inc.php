<?php

// We need to use the database connection from this file
require_once 'db.inc.php';

// This function gets the hobbies of a user
function getHobbies($username) {
    // We're using the database connection from the other file
    global $pdo;

    // We're asking the database for the user's hobbies
    $stmt = $pdo->prepare("SELECT hobby_name FROM Hobbies WHERE username = ?");
    $stmt->execute([$username]);

    // We're getting all the results and returning them
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// This function adds a new hobby to a user
function addHobby($username, $hobby) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to add a new hobby
    $stmt = $pdo->prepare("INSERT INTO Hobbies (username, hobby_name) VALUES (?, ?)");
    // We're doing the adding and returning if it was successful
    return $stmt->execute([$username, $hobby]);
}

// This function changes a user's hobby
function updateHobby($username, $oldHobby, $newHobby) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to change a hobby
    $stmt = $pdo->prepare("UPDATE Hobbies SET hobby_name = ? WHERE username = ? AND hobby_name = ?");
    // We're doing the changing and returning if it was successful
    return $stmt->execute([$newHobby, $username, $oldHobby]);
}

// This function removes a user's hobby
function deleteHobby($username, $hobby) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to remove a hobby
    $stmt = $pdo->prepare("DELETE FROM Hobbies WHERE username = ? AND hobby_name = ?");
    // We're doing the removing and returning if it was successful
    return $stmt->execute([$username, $hobby]);
}
?>
