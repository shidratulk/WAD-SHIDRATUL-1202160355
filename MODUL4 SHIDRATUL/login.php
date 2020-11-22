<?php
session_start();
include_once('connect.php');
$database = new database();
 
if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}
 
if(isset($_COOKIE['email']))
{
  $database->relogin($_COOKIE['email']);
  header('location:index.php');
}
 
if(isset($_POST['login2']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }   
 
    if($database->login($email,$password,$remember))
    {
      header('location:index.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" class="sr-only">E-Mail</label>
  <input type="text" id="email" class="form-control" placeholder="E-Mail" name="email" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me" name="remember"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login2">Sign in</button>
  <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
</form>
</body>
</html>