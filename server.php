<?php 
session_start();
$username = "";
$email    = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '1234', 'INFORMATION');
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username1']);
  $email = mysqli_real_escape_string($db, $_POST['email1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  if (empty($username)) 
{ 
array_push($errors, "Username required"); 
}
  if (empty($email)) { array_push($errors, "Email required"); }
  if (empty($password_1)) { array_push($errors, "Password required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Passwords Not Matching ");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}
?>
