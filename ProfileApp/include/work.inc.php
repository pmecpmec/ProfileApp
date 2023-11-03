<?php
require_once 'db.inc.php';

function getWorkExperiences($username) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT job_title, company_name FROM WorkExperience WHERE username = ?");
    $stmt->execute([$username]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addWorkExperience($username, $jobTitle, $companyName) {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO WorkExperience (username, job_title, company_name) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $jobTitle, $companyName]);
}

function updateWorkExperience($username, $oldJobTitle, $newJobTitle) {
    global $pdo;

    $stmt = $pdo->prepare("UPDATE WorkExperience SET job_title = ? WHERE username = ? AND job_title = ?");
    return $stmt->execute([$newJobTitle, $username, $oldJobTitle]);
}

function deleteWorkExperience($username, $jobTitle) {
    global $pdo;

    $stmt = $pdo->prepare("DELETE FROM WorkExperience WHERE username = ? AND job_title = ?");
    return $stmt->execute([$username, $jobTitle]);
}
?>
