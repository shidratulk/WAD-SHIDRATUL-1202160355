<?php
class database{
	var $host = "localhost";
	var $nama = "root";
	var $password = "";
	var $database = "wad_modul5";	
	var $koneksi;
 

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->nama, $this->password, $this->database);
        }
    function input ($name,$price,$description,$stock,$img)
	    {	
		$insert = mysqli_query($this->koneksi,"insert users values ('','$name','$price','$description','$stock','$img')");
		return $insert;
         }
    function select ($name,$price,$description,$stock,$img)	
	        {
		$query = mysqli_query($this->koneksi,"select * from users where name ='$name'");
		$data_user = $query->fetch_array();
           }
    } 
    ?>