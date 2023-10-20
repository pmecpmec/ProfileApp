<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<header class="header">
  <?php require 'navigation/nav.php'
  ?>
</header>

<body>
<form action="index.php">
  <div class="register">   
  <h1>Register</h1>
<p> Please Fill in this form to create an account.</p>

<label for="name"><b> Name</label></b>
<input type="name" placeholder="Enter Name" name="name"  id=" name"required>

<label for="last name"><b> Last name</label></b>
<input type="name" placeholder="Enter Last name" name="last name"  id="last name" required>

<label for="email"><b> email</label></b>
<input type="email" placeholder="Enter email" name="email"  id="email" required>

<label for="password"><b> password</label></b>
<input type="password" placeholder="Enter password" name="password"  id="password" required>

<label for="password-repeat"><b> Repeat password</label></b>
<input type="password" placeholder="Repeat password" name="password-repeat"  id="password-repeat" required>



<button type="sumbit" class="registerbtn">Register</button>
</div>
<div class="container signin">
  <p> already have an account <a href="index.php">sign in </a> </p>
</div>
</body>*/





</html>