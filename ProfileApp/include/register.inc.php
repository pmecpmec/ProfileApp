<?php
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = $_POST["username"];
    $last_name= $_POST["last_name"];
    $pwd = $_POST["pwd"];
    $pwd_confirm = $_POST["pwd_confirm"];
    $email = $_POST["email"];
   
    if(empty($username)or empty($last_name) or empty($pwd) or empty($pwd_confirm)or empty($email)){
        $_SESSION['error'] = "Please fill in all fields!";
        header("Location: ../index.php");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Invalid email address.";
        header("Location: ../index.php");
        exit();
    }
   
    if($pwd!==$pwd_confirm){
        $_SESSION['error'] = "Password does not match";
        header("Location: ../index.php");
        exit();
    }

    header("location:../login.php");


    try{
        require_once 'db.inc.php';
    
        $query = "INSERT INTO users (username,last_name,pwd,pwd_confirm,email)VALUES
        (?,?,?,?,?);";
        
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([$username,$last_name, $pwd, $pwd_confirm,$email]);
        
        header("Location: ../login.php");
        die();
        
    }catch (PDOException $e) {
        echo "connection failed:" . $e->getMessage();
        return;
    }
}else{
    header("Location: ../index.php");
    die();
}
