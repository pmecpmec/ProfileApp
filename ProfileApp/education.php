<?php
// Start a new session
session_start();

// Include the file 'education.inc.php' which contains functions for managing education information
require_once 'include/education.inc.php';

// Include the navigation bar
include 'navigation/nav.php';

// Get the username from the session
$username = $_SESSION['username'];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If the 'new_education' field is not empty, add the new education to the database
    if (!empty($_POST['new_education'])) {
        addEducation($username, $_POST['new_education']);
    }

    // If the 'delete_education' field is not empty, delete the specified education from the database
    if (!empty($_POST['delete_education'])) {
        deleteEducation($username, $_POST['delete_education']);
    }
}

// Get the user's education information from the database
$Educations = getEducation($username);
?>

<!-- Start of HTML -->
<!DOCTYPE html>
<html>
<body>
<!-- Title of the page -->
<h1>Your education</h1>

    <!-- Form for adding and deleting education -->
    <form method="post">
        <!-- Input field for adding new education -->
        <label for="new_education">Add a new education:</label>
        <input type="text" id="new_education" name="new_education">
        <button type="submit" value="Add">Add</button>

        <!-- Input field for deleting education -->
        <label for="delete_education">Delete education:</label>
        <input type="text" id="delete_education" name="delete_education">
        <button type="submit" value="Delete" class="deletebutton">Delete</button>
    </form>

<!-- List of educations -->
<ul classname="educationlist">
<!-- PHP code to display each education -->
<?php foreach ($Educations as $Education): ?>
    <li><?php echo htmlspecialchars($Education['education_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
<!-- Include the footer -->
<?php
include 'navigation/footer.php'
?>
</html>
