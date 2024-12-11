<?php
    session_start();
    
    include('function.php');

    if(isset($_POST['login'])) {
        login($_POST);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/login.css">
  <title>Login</title>
</head>
<body>
<div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-group">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" name="login" >Login</button>
    </form>
    <p>Not have some Account </p><a href="register.php">Register</a>
  </div>
</body>
</html>