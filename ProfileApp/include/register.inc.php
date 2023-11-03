//register.php
<?php
    //start PHP session
    session_start();
  
    //check if register form is submitted
    if(isset($_POST['register'])){
        //assign variables to post values
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $pwd_confirm = $_POST['pwd_confirm'];
        $email = $_POST['email'];
        
  
        //check if password matches confirm password
        if($password != $confirm){
            //return the values to the user
            $_SESSION['username'] = $username;
            $_SESSION['pwd'] = $pwd;
            $_SESSION['pwd_confirm'] = $pwd_confirm;
  
            //display error
            $_SESSION['error'] = 'Passwords did not match';
        }
        else{
            //include our database connection
            include 'db.inc.php';
  
            //check if the email is already taken
            $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(['username' => $username]);
  
            if($stmt->rowCount() > 0){
                //return the values to the user
                $_SESSION['username'] = $username;
                $_SESSION['pwd'] = $pwd;
                $_SESSION['pwd_confirm'] = $pwd_confirm;
  
                //display error
                $_SESSION['error'] = 'username already taken';
            }
            else{
                //encrypt password using password_hash()
                $pwd = password_hash($pwd, PASSWORD_DEFAULT);
  
                //insert new user to our database
                $stmt = $pdo->prepare('INSERT INTO users (username, pwd) VALUES (:username, :pwd)');
  
                try{
                    $stmt->execute(['username' => $username, 'pwd' => $pwd]);
  
                    $_SESSION['success'] = 'User verified. You can <a href="index.php">login</a> now';
                }
                catch(PDOException $e){
                    $_SESSION['error'] = $e->getMessage();
                }
  
            }
  
        }
  
    }
    else{
        $_SESSION['error'] = 'Fill up registration form first';
    }
    
    //redirect to index.php
    header('location: index.php');