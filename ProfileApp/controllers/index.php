

<!--<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <header class="header">

  </header>

  <title>KEEP</title>
  <b>
    <h1>Welkom bij onze website!</h1>
  </b>
</head>

<body>
  <br>
  <form action="index.php" method="post">
    <div class="login">
      <h1> Login to start your journey</h1>
    
      <label for="email"><b> email</label></b>
      <input type="email" placeholder="Enter email" name="email"  id="email" required>

      <label for="password"><b> password</label></b>
      <input type="password" placeholder="Enter password" name="password"  id="password" required>

      <button type="submit" id="btn">log in</button>

      <p> not registered yet ? <button id="btn"><a href="register.php">sign in</a></p> 
    </div>
  </form>
</body>
<footer>
</footer>

</html> -->	  

<?php
/*class database{
  public function query($query  ) 
{

  $dsn = "mysql:host=localhost;dbname=profileapp;port=3306;charset=utf8mb4";
  $username = "root";
  $password = "Realmadridnumber100!";
  $pdo = new PDO($dsn, $username, $password);

  $statement = $pdo->prepare($query);
  $statement->execute();

return $statement->fetchAll();

}
}



$db= new database();
$users= $db->query("select * from users where id > 2");

foreach($users as $user){
  echo "<li>" . $user['email'] . "</li>";
}*/






$profileapp = require 'private.php';
$dbconn = $profileapp['database'];







try {
  $conn = new PDO("mysql:host=$dbconn[servername];
  $dbname=$dbconn[dbname]", 
  $dbconn ['username'], 
  $dbconn['password']);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



/*$conn = new Connection();
$sql= "SELECT * FROM users";
$stmt= $conn->prepare($sql);
$stmt->execute();


$users = $stmt->fetchAll(pdo::FETCH_ASSOC);
var_dump($users);

//foreach($users as $user){
 // echo "<li>" . $user['email'] . "</li>";
//}



?>