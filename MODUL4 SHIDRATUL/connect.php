<?php
class database{
	var $host = "localhost";
	var $nama = "root";
	var $password = "";
	var $database = "wad_modul4";	
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->nama, $this->password, $this->database);
	}
 
 
	function register($nama,$email,$nohp,$password)
	{	
		$insert = mysqli_query($this->koneksi,"insert users values ('','$nama','$email','$nohp','$password')");
		return $insert;
	}
 

	function login($email,$password,$remember)	
	{
		$query = mysqli_query($this->koneksi,"select * from users where email='$email'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('password', $data_user['password'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $data_user['password'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($email)
	{
		$query = mysqli_query($this->koneksi,"select * from users where email='$email'");
		$data_user = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $data_user['password'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>