<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="login-box">
      <img src="logo.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
     <form method="post" action="a.php">
	<?php include('error.php'); ?>
         Register
        <label for="username">Username</label>
        <input type="text" name="username1" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
	<label for="email">Email</label>
        <input type="text"  name="email1" placeholder="Enter Email">
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
<label for="password">Password</label>
        <input type="password" name="confirmpassword" placeholder="Re-Enter  Password">
        <input type="submit" name="reg_user" value="Register">
      </form>
    </div>
  </body>
</html>
