<?php
include_once('connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($nama,$email,$nohp,$password))
    {
      header('location:login.php');
    }
}
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>    
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">REGISTRASI</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="">

    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>
 
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
      </div>
    </div>
 
  <div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">No Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
    </div>
  </div>
    
  <div class="form-group row">
    <div class="col-sm-10">
      <a href="login.php" class="btn btn-success">Login</a>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
</form>
  </div>
</main>
</body>
</html>