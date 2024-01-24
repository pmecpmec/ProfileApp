<?php
// Start a new session
session_start();

// Include the file 'hobby.inc.php' which contains functions for managing hobby information
require_once 'include/hobby.inc.php';

// Include the navigation bar
include 'navigation/nav.php';

// Get the username from the session
$username = $_SESSION['username'];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If the 'new_hobby' field is not empty, add the new hobby to the database
    if (!empty($_POST['new_hobby'])) {
        addHobby($username, $_POST['new_hobby']);
    }

    // If the 'delete_hobby' field is not empty, delete the specified hobby from the database
    if (!empty($_POST['delete_hobby'])) {
        deleteHobby($username, $_POST['delete_hobby']);
    }
}

// Get the user's hobby information from the database
$hobbies = getHobbies($username);
?>

<!-- Start of HTML -->
<!DOCTYPE html>
<html>
<body>
<!-- Title of the page -->
<h1>Your Hobbies</h1>

    <!-- Form for adding and deleting hobbies -->
    <form method="post" class="formam"> 
    <!-- Input field for adding new hobby -->
    <label for="new_hobby">Add a new hobby:</label>
    <input type="text" id="new_hobby" name="new_hobby">
    <button type="submit" value="Add" class="common-button">Add</button>

    <!-- Input field for deleting hobby -->
    <label for="delete_hobby">Delete a hobby:</label>
    <input type="text" id="delete_hobby" name="delete_hobby">
    <button type="submit" value="Delete" class="common-button deletebutton">Delete</button>
</form>

<!-- List of hobbies -->
<ul classname="educationlist">
<!-- PHP code to display each hobby -->
<?php foreach ($hobbies as $hobby): ?>
    <li><?php echo htmlspecialchars($hobby['hobby_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
<!-- Include the footer -->
<?php
include 'navigation/footer.php'
?>
</html>
