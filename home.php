<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

    <div class="login-box">
<h1>Welcome </h1>
      <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><strong> <?php echo $_SESSION['username']; ?></strong></h1>
	<?php endif ?>
    </div>
  </body>
</html>

