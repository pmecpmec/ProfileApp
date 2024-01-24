<?php
// Include the navigation bar
include 'navigation/nav.php';
?>

<!-- Start of HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Set the character encoding for the document -->
    <meta charset="UTF-8">
    <!-- Set the title of the document -->
    <title>Home</title>
    <!-- Set the viewport to scale to the width of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to the stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Start of the header -->
    <header class="header">
     
      
    </header>
  
 
    </div>
    </header>
    <!-- Set the title of the document again -->
    <title>KEEP</title>
</head>

<body>

<?php
// Start a new session
session_start();

// If the username is set in the session
if (isset($_SESSION['username'])) {
    // Display a welcome message with the username
    echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
    // If the username is not set in the session, ask the user to log in
    echo "Please log in.";
}
?>

<!--welcome message -->
<h1> Welcome to your profile <h1>

</body>

</html>
