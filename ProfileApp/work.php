<?php
session_start();
require_once 'include/work.inc.php';
include 'navigation/nav.php';

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['new_job']) && !empty($_POST['new_company'])) {
        addWorkExperience($username, $_POST['new_job'], $_POST['new_company']);
    }

    if (!empty($_POST['delete_job'])) {
        deleteWorkExperience($username, $_POST['delete_job']);
    }
}

$workExperiences = getWorkExperiences($username);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Your Work Experiences</h1>



<form method="post">
   
    <label for="new_job">Add a new job:</label>
    <input type="text" id="new_job" name="new_job">

    <label for="new_company">Company name:</label>
    <input type="text" id="new_company" name="new_company">
    
    <button type="submit" value="Add">Add</button>

    <label for="delete_job">Delete a job:</label>
    <input type="text" id="delete_job" name="delete_job">
    
    <button type="submit" value="Delete" class="deletebutton">Delete</button>
</form>

<ul classname="educationlist">
<?php foreach ($workExperiences as $work): ?>
    <li><?php echo htmlspecialchars($work['job_title']); ?> at <?php echo htmlspecialchars($work['company_name']); ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
