<?php
    include('function.php');

    if(isset($_POST['register'])) {
        register($_POST);
    }
?><!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/login.css">
  <title>Register</title>
</head>
<body>
  <div class="login-container">
    <h2>Register</h2>
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
            <div>
                <label for="role">What Is Your Role?</label>
                <select name="role" id="role" required>
                  <option value="" disabled selected>-- Select Role</option>
                  <option value="1">Admin</option>
                  <option value="0">User</option>
                </select>
            </div>
            <button type="submit" class="btn" name="register" >Sign in</button>
            <p>Already have a account ? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>