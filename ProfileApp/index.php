<?php
// Start a new session
session_start();

// Include the navigation bar
include 'navigation/nav.php';
?>

<!-- Start of HTML -->
<!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8">

    <title></title>
    

</head>
<body>

<div>
    <!-- Title of the page -->
    <h1 style="text-align:center; margin-top:30px;">Register Here!</h1>

    <!-- Start of the form -->
    <div>
        <div>
            <?php
                // If there's an error message in the session, display it
                if(isset($_SESSION['error'])){
                    echo "
                        <div>
                            <i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
                        </div>
                    ";
  
                    // Remove the error message from the session
                    unset($_SESSION['error']);
                }
  
                // If there's a success message in the session, display it
                if(isset($_SESSION['success'])){
                    echo "
                        <div>
                            <i class='fas fa-check-circle'></i> ".$_SESSION['success']."
                        </div>
                    ";
  
                    // Remove the success message from the session
                    unset($_SESSION['success']);
                }
            ?>
            
            <div>
                <div>
                    <!-- The form posts to 'include/register.inc.php' -->
     <div class="register-container">
    <form method="POST" action="include/register.inc.php">
        <!-- Input field for the username -->
        <div>
            <label for="username">Username</label>
            <input type="username" id="username" name="username" value="<?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; unset($_SESSION['username']) ?>" placeholder="username" required>
        </div>
        <!-- Input field for the password -->
        <div>
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd" value="<?php echo (isset($_SESSION['pwd'])) ? $_SESSION['pwd'] : ''; unset($_SESSION['pwd']) ?>" placeholder="password" required>
        </div>
        <!-- Input field for confirming the password -->

        <hr>

        <div>
            <button type="submit" name="register">Signup</button>
            <!-- Link to the login page -->
            <a href="login.php">Back to login</a>
        </div>
    </form>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Include the footer -->
<?php
include 'navigation/footer.php'
?>
</html>
