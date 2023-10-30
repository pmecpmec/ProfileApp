<?php
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
  
    if(empty($username)or empty($pwd)){
        die("Please fill in all fields!");
    }
    
    try{
        require_once 'db.inc.php';
    
        $query = "SELECT * FROM users WHERE username = ?;";
        
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([ $username ]);

        if($stmt->rowCount() == 1){
            // User found
            $user = $stmt->fetch();
            // Verify the password
            if (password_verify($pwd, $user['pwd'])) {
                // Password is correct, start a session and redirect to a secure page
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user['username']; // Store the user's name in a session variable
                header("location: ../home.php");
                die();
            } else {
                // Password is incorrect, show an error message
                echo "Invalid username or password.";
            }
        } else {
            // No user found, show an error message
            echo "Invalid username or password.";
        }
        
        die();
    }catch (PDOException $e) {
        echo "connection failed:" . $e->getMessage();
        return;
    }
}else{
    header("Location: ../index.php");
    die();
}
