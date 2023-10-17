<!DOCTYPE html>
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

      <button type="submit" class="loginbtn">log in</button>

      <div class="container signin">
        <p> not registered yet ? <a href="register.php">sign in </a> </p>
      </div>
    </div>
  </form>
</body>
<footer>
</footer>

</html>