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

<div class="header">
    <h1>Profielbeheer</h1>
</div>

<div class="profile-container">
    <h2>Mijn Profiel</h2>

    <!-- Profielinformatie -->
    <div class="profile-info">
        
    </div>

    <!-- Profiel bewerken formulier -->
    <div class="edit-profile-form">
        <h3>Bewerk Profiel</h3>
        <form method="POST" action="">
            <label for="school">Schoolprestaties:</label>
            <input type="text" id="school" name="school" value="<?php echo isset($_SESSION['profile']['school']) ? $_SESSION['profile']['school'] : ''; ?>" required>

            <label for="work">Werkervaring:</label>
            <input type="text" id="work" name="work" value="<?php echo isset($_SESSION['profile']['work']) ? $_SESSION['profile']['work'] : ''; ?>" required>

            <label for="hobbies">Hobby's:</label>
            <input type="text" id="hobbies" name="hobbies" value="<?php echo isset($_SESSION['profile']['hobbies']) ? $_SESSION['profile']['hobbies'] : ''; ?>" required>

            <button type="submit">Opslaan</button>
        </form>
    </div>
</div>

<script src="app.js"></script>
</body>
</html>
