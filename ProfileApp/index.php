<<<<<<< HEAD
//register_form.php
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login and Register using PDO PHP Mysql</title>
</head>
<body>
<div class="container">
    <h1 class="text-center" style="margin-top:30px;">Login and Register using PDO PHP Mysql</h1>
    <hr>
    <div class="row justify-content-md-center">
        <div class="col-md-5">
            <?php
                if(isset($_SESSION['error'])){
                    echo "
                        <div class='alert alert-danger text-center'>
                            <i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
                        </div>
                    ";
  
                    //unset error
                    unset($_SESSION['error']);
                }
  
                if(isset($_SESSION['success'])){
                    echo "
                        <div class='alert alert-success text-center'>
                            <i class='fas fa-check-circle'></i> ".$_SESSION['success']."
                        </div>
                    ";
  
                    //unset success
                    unset($_SESSION['success']);
                }
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Register a new account</h5>
                    <hr>
                    <form method="POST" action="login.php">
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">username</label>
                                <input class="form-control" type="username" id="username" name="username" value="<?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; unset($_SESSION['username']) ?>" placeholder="input username" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pwd" class="col-sm-3 col-form-label">password</label>
                                <input class="form-control" type="pwd" id="pwd" name="pwd" value="<?php echo (isset($_SESSION['pwd'])) ? $_SESSION['pwd'] : ''; unset($_SESSION['pwd']) ?>" placeholder="input pwd" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pwd_confirm" class="col-sm-3 col-form-label">confirm</label>
                                <input class="form-control" type="pwd" id="pwd_confirm" name="pwd_confirm" value="<?php echo (isset($_SESSION['pwd_confirm'])) ? $_SESSION['pwd_confirm'] : ''; unset($_SESSION['pwd_confirm']) ?>" placeholder="re-type pwd">
                            </div>
                        </div>
                    <hr>
                    <div>
                        <button type="submit" class="btn btn-success" name="register"><i class="far fa-user"></i> Signup</button>
                        <a href="login.php">Back to login</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
=======
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

>>>>>>> d8e9ac09732e9bb5c2ed21e29e8f43502e53cbbe
</html>