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
  <div class="login-container">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required />
      <br />
      <label for="password">Password:</label>
      <input type="password" name "password" id="password" required />
      <input type="submit" value="Login" />
    </form>
  </div>
</body>

</html>