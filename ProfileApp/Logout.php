<?php
// Start the session
session_start();

// Unset all of the session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to index.php with a success message
header("Location: ../index.php?logout=success");
exit();

