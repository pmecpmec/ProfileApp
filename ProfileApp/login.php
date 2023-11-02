<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "include/login.inc.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    if(empty($username) or empty($pwd)){
        $_SESSION['error'] = "Please fill in all fields!";
        header("Location: index.php");
        exit();
    }

    // Call the loginUser function
    $result = loginUser($username, $pwd);

    if ($result) {
        // If login is successful
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; // Store the user's name in a session variable
        $_SESSION['pwd']= $pwd;
        header("location: home.php");
        exit();
    } else {
        // If login failed, show an error message
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
</head>
<body>
    <form action="login.php"method="post">
    <label for="name">Name:</label>
        <input type="text" name="username"value=" <?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; unset($_SESSION['username']) ?>" placeholder="username"><br>
        <label for="pwd">Wachtwoord:</label><br>
        <input type="password" id="pwd" name="pwd" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" required><br>
        <a href="home.php"><input type="submit" value="Login"></a>
        <a href="index.php">No account signup here</a>   
    </form>
</body>
</html>
