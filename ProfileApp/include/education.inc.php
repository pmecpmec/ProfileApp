<?php
require_once "db.inc.php";

function getEducation($username) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT education_name FROM Education WHERE username = ?");
    $stmt->execute([$username]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function addEducation($username,$education){
   global $pdo;

   $stmt= $pdo->prepare("INSERT INTO Education(username,education_name)VALUES (?,?)");
   return $stmt->execute([$username,$education]);
}

function updateEducation($username,$oldEducation,$newEducation){
   global $pdo;

   $stmt= $pdo->prepare("UPDATE Education SET education_name = ? WHERE username = ? AND education_name = ?");
   return $stmt->execute([$newEducation,$username,$oldEducation]);
}

function deleteEducation($username,$education){
   global $pdo;

   $stmt= $pdo->prepare("DELETE FROM Education WHERE username = ? AND education_name = ?");
   return $stmt->execute([$username,$education]);
}
