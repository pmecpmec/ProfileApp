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
    <!-- Title van pagina -->
    <h1 style="text-align:center; margin-top:30px;">Register Here!</h1>

    <!-- Start van de form -->
    <div>
        <div>
            <?php
                // Als er een error is dan geeft hij een message in de session.
                if(isset($_SESSION['error'])){
                    echo "
                        <div>
                            <i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
                        </div>
                    ";
  
                    // Verwijder de error message van de session
                    unset($_SESSION['error']);
                }
  
                // Als het success is geef de message in de session.
                if(isset($_SESSION['success'])){
                    echo "
                        <div>
                            <i class='fas fa-check-circle'></i> ".$_SESSION['success']."
                        </div>
                    ";
  
                    // verwijder de success message van de session
                    unset($_SESSION['success']);
                }
            ?>
            
            <div>
                <div>
                    <!-- De form posts to 'include/register.inc.php' -->
     <div class="register-container">
    <form method="POST" action="include/register.inc.php">
     <!-- Invoerveld voor de gebruikersnaam -->
        <div>
            <label for="username">Username</label>
            <input type="username" id="username" name="username" value="<?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; unset($_SESSION['username']) ?>" placeholder="username" required>
        </div>
       <!-- Invoerveld voor de wachtwoord -->
        <div>
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd" value="<?php echo (isset($_SESSION['pwd'])) ? $_SESSION['pwd'] : ''; unset($_SESSION['pwd']) ?>" placeholder="password" required>
        </div>
        
        <div>
             <label for="confirm_pwd">Confirm Password</label>
             <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm Password" required>
        </div>
      

        <hr>

        <div>
            <button type="submit" name="register">Signup</button>
            <!-- Link naar de login page -->
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
<!-- de footer -->
<?php
include 'navigation/footer.php'
?>
</html>
