<?php
// Start een nieuwe sessie
session_start();

// Inclusief het bestand 'education.inc.php' dat functies bevat voor het beheren van onderwijsinformatie
require_once 'include/education.inc.php';

// Inclusief de navigatiebalk

// Haal de gebruikersnaam op uit de sessie
$username = $_SESSION['username'];

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Als het veld 'new_education' niet leeg is, voeg dan het nieuwe onderwijs toe aan de database
    if (!empty($_POST['new_education'])) {
        addEducation($username, $_POST['new_education']);
    }

    // Als het veld 'delete_education' niet leeg is, verwijder dan het gespecificeerde onderwijs uit de database
    if (!empty($_POST['delete_education'])) {
        deleteEducation($username, $_POST['delete_education']);
    }
}

// Haal de onderwijsinformatie van de gebruiker op uit de database
$educations = getEducation($username);
?>

<!-- Start van HTML -->
<!DOCTYPE html>
<html>
<body>
<?php include 'navigation/nav.php'; ?>
<!-- Titel van de pagina -->
<h1>Your Education</h1>

    <!-- Formulier voor het toevoegen en verwijderen van onderwijs -->
 <form method="post" class="formam">
    <!-- Invoerveld voor het toevoegen van nieuw onderwijs -->
    <label for="new-education">Add education:</label>
    <input type="text" id="new-education" name="new-education">
    <button type="submit" name="add-education" class="common-button">Add</button>

    <!-- Invoerveld voor het verwijderen van onderwijs -->
    <label for="delete-education">Delete education:</label>
    <input type="text" id="delete-education" name="delete-education">
    <button type="submit" name="delete-education" class="common-button deletebutton">Delete</button>
</form>
<!-- Lijst van onderwijs -->
<ul classname="educationlist">
<!-- PHP-code om elk onderwijs weer te geven -->
<?php foreach ($educations as $education): ?>
    <li><?php echo htmlspecialchars($education['education_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
<!-- Inclusief de voettekst -->
<?php
include 'navigation/footer.php'
?>
</html>
