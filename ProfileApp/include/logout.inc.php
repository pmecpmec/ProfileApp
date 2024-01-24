<?php

// We're starting a session
session_start();

// We're removing all the session variables
session_unset();

// We're ending the session
session_destroy();

// We're sending the user back to the index page with a message that there was no error
header("location: ../index.php?error-none");
?>
