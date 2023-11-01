<?php
session_start();
require_once 'include/education.inc.php';

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['new_education'])) {
        addEducation($username, $_POST['new_education']);
    }

    if (!empty($_POST['delete_education'])) {
        deleteEducation($username, $_POST['delete_education']);
    }
}

$Educations = getEducation($username);
?>
<!DOCTYPE html>
<html>
<body>
<h1>Your education</h1>

<ul>
<?php foreach ($Educations as $Education): ?>
    <li><?php echo htmlspecialchars($Education['education_name']); ?></li>
<?php endforeach; ?>
</ul>

<form method="post">
    <label for="new_education">Add a new education:</label>
    <input type="text" id="new_education" name="new_education">
    <input type="submit" value="Add">

    <label for="delete_education">Delete education:</label>
    <input type="text" id="delete_education" name="delete_education">
    <input type="submit" value="Delete">
</form>

</body>
</html>
