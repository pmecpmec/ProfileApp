<?php
session_start(); // Start de sessie

// Hier kun je de profielgegevens van de gebruiker uit de database halen
// en deze in de $profileData array opslaan.

$profileData = array(
    'school' => 'Mijn School',
    'work' => 'Mijn Werk',
    'hobbies' => 'Mijn Hobby\'s'
);

// Als het bewerkingsformulier wordt ingediend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hier kun je de ingediende gegevens valideren en bijwerken in de database
    // Gebruik $_POST['school'], $_POST['work'], $_POST['hobbies'] om de waarden op te halen.
    // Voeg de logica toe om de gegevens in de database bij te werken.

    // Voorbeeld van het bijwerken van de sessiegegevens
    $_SESSION['profile'] = array(
        'school' => $_POST['school'],
        'work' => $_POST['work'],
        'hobbies' => $_POST['hobbies']
    );

    // Je zou hier ook een databaseupdate kunnen toevoegen.
}
?>
<?php
include 'navigation/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profielbeheer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Mijn Profiel </h1>

<div class="profile-container">
<img src="img/ebram.jpeg" class="ebram"> 
<img src="img/potlood.jpg"class="potlood">

    <!-- Profiel bewerken formulier -->
    <div>
        <h1> Ebram Moawad </h1>

        <h3> Christelijke School Windesheim </h3>
        <h3> Stomerij Droog Cleaning Service </h3> 
        
    </div>
</div>
    <div class="containers">
        <div class="education-container">
        <h1> Education </h1>
        <hr>
        <h3> MBO 4 Hotel Managment / Entrepeneur </h3>
        <h3> AD Software Developer</h3>
        </div>

        <div class="work-container">
        <h1> Work Experience </h1>
        <hr>
        <h3> Engineer at Schiphol Airport</h3>
        <h3> Folding Clothes at Stomerij </h3>

        </div>

        <div class="hobby-container">
        <h1> Hobbies </h1>
        <hr>
        <h3> Playing Football at Real Madrid </h3>
        <h3> Fitness at the Basicfit</h3>
        <h3> Watching Football</h3>
         </div>
    </div>
</body>
</html>
