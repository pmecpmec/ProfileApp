<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<header>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    
</header>

<body>
        
    <h1>Registration Form</h1>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);  // clear the value so that it doesn't persist
    }
    ?>
    <form action="include/register.inc.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="username" placeholder="username"><br>

        <label for="last name">Last name</label>
        <input type="name" placeholder="Enter Last name" name="last name"><br>

        <label for="password">Password:</label>
        <input type="password" name="pwd" id="password"><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="pwd_confirm" id="pwd_confirm"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="Email"><br>


        <input type="submit" value="Register">



    </form>
    <?php
    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $last_name = $_POST["last_name"];
        $pwd = $_POST["pwd"];
        $pwd_confirm = $_POST["pwd_confirm"];
        $email = $_POST["email"];

        if (empty($username) or empty($last_name) or empty($pwd) or empty($pwd_confirm) or empty($email)) {
            $error = "Please fill in all fields!";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email address.";
        } else if ($pwd !== $pwd_confirm) {
            $error = "Password does not match";
        }


        if (empty($error)) {
            header("location:login.php");
            exit();
        }
    }

    if (!empty($error)) {
        echo $error;
    }


    ?>



</body>

</html>