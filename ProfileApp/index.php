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
</html>