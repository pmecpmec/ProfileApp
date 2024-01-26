<?php
// Start een nieuwe sessie
session_start();

// Inclusief het bestand 'hobby.inc.php' dat functies bevat voor het beheren van hobby-informatie
require_once 'include/hobby.inc.php';

// Inclusief de navigatiebalk
include 'navigation/nav.php';

// Haal de gebruikersnaam op uit de sessie
$username = $_SESSION['username'];

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Als het veld 'new_hobby' niet leeg is, voeg dan de nieuwe hobby toe aan de database
    if (!empty($_POST['new_hobby'])) {
        addHobby($username, $_POST['new_hobby']);
    }

    // Als het veld 'delete_hobby' niet leeg is, verwijder dan de gespecificeerde hobby uit de database
    if (!empty($_POST['delete_hobby'])) {
        deleteHobby($username, $_POST['delete_hobby']);
    }
}

// Haal de hobby-informatie van de gebruiker op uit de database
$hobbies = getHobbies($username);
?>

<!-- Start van HTML -->
<!DOCTYPE html>
<html>
<body>
<!-- Titel van de pagina -->
<h1>Your hobby</h1>

    <!-- Formulier voor het toevoegen en verwijderen van hobby's -->
    <form method="post" class="formam"> 
    <!-- Invoerveld voor het toevoegen van een nieuwe hobby -->
    <label for="new_hobby">Add a new hobby:</label>
    <input type="text" id="new_hobby" name="new_hobby">
    <button type="submit" value="add" class="common-button">Add</button>

    <!-- Invoerveld voor het verwijderen van een hobby -->
    <label for="delete_hobby">Delete hobby:</label>
    <input type="text" id="delete_hobby" name="delete_hobby">
    <button type="submit" value="delete" class="common-button deletebutton">Delete</button>
</form>

<!-- Lijst van hobby's -->
<ul classname="educationlist">
<!-- PHP-code om elke hobby weer te geven -->
<?php foreach ($hobbies as $hobby): ?>
    <li><?php echo htmlspecialchars($hobby['hobby_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
<!-- Inclusief de voettekst -->
<?php
include 'navigation/footer.php'
?>
</html>
