<?php
session_start();
require_once 'include/work.inc.php';
include 'navigation/nav.php';

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['new_job']) && !empty($_POST['new_company'])) {
        addWorkExperience($username, $_POST['new_job'], $_POST['new_company']);
    }

    if (!empty($_POST['delete_job'])) {
        deleteWorkExperience($username, $_POST['delete_job']);
    }
}

$workExperiences = getWorkExperiences($username);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Your Work Experiences</h1>

<!-- Formulier voor het toevoegen en verwijderen van werkervaring -->
<form method="post" class="formam"> 
<!-- Invoerveld voor het toevoegen van een nieuwe baan -->

    <label for="new_job">Add a new job:</label>
    <input type="text" id="new_job" name="new_job">
 <!-- Invoerveld voor de naam van het bedrijf -->
    <label for="new_company">Company name:</label>
    <input type="text" id="new_company" name="new_company">
    <!-- Knop om nieuwe werkervaring toe te voegen -->
    <button type="submit" value="Add" class="common-button">Add</button>
<!-- Invoerveld voor het verwijderen van een baan -->
    <label for="delete_job">Delete a job:</label>
    <input type="text" id="delete_job" name="delete_job">
     <!-- Knop om werkervaring te verwijderen -->
    <button type="submit" value="Delete" class="common-button deletebutton">Delete</button>
</form>
<!-- Lijst van werkervaringen -->

<ul classname="educationlist">
<?php foreach ($workExperiences as $work): ?>
    <li><?php echo htmlspecialchars($work['job_title']); ?> at <?php echo htmlspecialchars($work['company_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
