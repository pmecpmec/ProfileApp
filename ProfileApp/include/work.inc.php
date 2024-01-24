<?php

// We need to use the database connection from this file
require_once 'db.inc.php';

// This function gets the work experiences of a user
function getWorkExperiences($username) {
    // We're using the database connection from the other file
    global $pdo;

    // We're asking the database for the user's job title and company name
    $stmt = $pdo->prepare("SELECT job_title, company_name FROM WorkExperience WHERE username = ?");
    $stmt->execute([$username]);

    // We're getting all the results and returning them
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// This function adds a new work experience to a user
function addWorkExperience($username, $jobTitle, $companyName) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to add a new work experience
    $stmt = $pdo->prepare("INSERT INTO WorkExperience (username, job_title, company_name) VALUES (?, ?, ?)");
    // We're doing the adding and returning if it was successful
    return $stmt->execute([$username, $jobTitle, $companyName]);
}

// This function changes a user's work experience
function updateWorkExperience($username, $oldJobTitle, $newJobTitle) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to change a work experience
    $stmt = $pdo->prepare("UPDATE WorkExperience SET job_title = ? WHERE username = ? AND job_title = ?");
    // We're doing the changing and returning if it was successful
    return $stmt->execute([$newJobTitle, $username, $oldJobTitle]);
}

// This function removes a user's work experience
function deleteWorkExperience($username, $jobTitle) {
    // We're using the database connection from the other file
    global $pdo;

    // We're telling the database to remove a work experience
    $stmt = $pdo->prepare("DELETE FROM WorkExperience WHERE username = ? AND job_title = ?");
    // We're doing the removing and returning if it was successful
    return $stmt->execute([$username, $jobTitle]);
}
?>
