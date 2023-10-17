<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <header class="header">
    <?php require 'navigation/nav.php'
    ?>
  </header>

  <title>KEEP</title>
  <b>
    <h1>Welkom bij onze website!</h1>
  </b>
</head>

<body>
  <br>
  <h3>
    <p>
      <center>We zijn blij dat je er bent. Hier vind je allerlei informatie en hulpmiddelen om je te helpen bij je reis.
    </p>
    </center>
  </h3>
  <form action="index.php" method="post">
    <div class="register">
      <h1>Register</h1>
      <p> Please Fill in this form to create an account.</p>
 

<label for="email"><b> email</label></b>
<input type="email" placeholder="Enter email" name="email"  id="email" required>

<label for="password"><b> password</label></b>
<input type="password" placeholder="Enter password" name="password"  id="password" required>


<button type="sumbit" class="registerbtn">Register</button>
</div>
<div class="container signin">
  <p> already have an account <a href="index.php">sign in </a> </p>



</body>
<footer>
</footer>

</html>