<?php

// We need to use the database connection from this file
require_once "db.inc.php";

// This function gets the education details of a user
function getEducation($username) {
    // We're using the database connection from the other file
    global $pdo;

    // We're asking the database for the user's education
    $stmt = $pdo->prepare("SELECT education_name FROM Education WHERE username = ?");
    $stmt->execute([$username]);

    // We're getting all the results and returning them
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// This function adds a new education to a user
function addEducation($username,$education){
   // We're using the database connection from the other file
   global $pdo;

   // We're telling the database to add a new education
   $stmt= $pdo->prepare("INSERT INTO Education(username,education_name)VALUES (?,?)");
   // We're doing the adding and returning if it was successful
   return $stmt->execute([$username,$education]);
}

// This function changes a user's education
function updateEducation($username,$oldEducation,$newEducation){
   // We're using the database connection from the other file
   global $pdo;

   // We're telling the database to change an education
   $stmt= $pdo->prepare("UPDATE Education SET education_name = ? WHERE username = ? AND education_name = ?");
   // We're doing the changing and returning if it was successful
   return $stmt->execute([$newEducation,$username,$oldEducation]);
}

// This function removes a user's education
function deleteEducation($username,$education){
   // We're using the database connection from the other file
   global $pdo;

   

   // We're telling the database to remove an education
   $stmt= $pdo->prepare("DELETE FROM Education WHERE username = ? AND education_name = ?");
   // We're doing the removing and returning if it was successful
   return $stmt->execute([$username,$education]);
}
