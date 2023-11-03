<?php
session_start();
require_once 'include/hobby.inc.php';

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['new_hobby'])) {
        addHobby($username, $_POST['new_hobby']);
    }

    if (!empty($_POST['delete_hobby'])) {
        deleteHobby($username, $_POST['delete_hobby']);
    }
}

$hobbies = getHobbies($username);
?>

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<body>-->
<!--<h1>Your Hobbies</h1>-->
<!---->
<!--<ul>-->
<?php //foreach ($hobbies as $hobby): ?>
<!--    <li>--><?php //echo htmlspecialchars($hobby['name']); ?><!--</li>-->
<?php //endforeach; ?>
<!--</ul>-->
<!---->
<!--<form method="post">-->
<!--    <label for="new_hobby">Add a new hobby:</label>-->
<!--    <input type="text" id="new_hobby" name="new_hobby">-->
<!--    <input type="submit" value="Add">-->
<!---->
<!--    <label for="delete_hobby">Delete a hobby:</label>-->
<!--    <input type="text" id="delete_hobby" name="delete_hobby">-->
<!--    <input type="submit" value="Delete">-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->
