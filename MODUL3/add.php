<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header> 
		<nav class="menu">
			<ul>
				<li>
					<a>EAD EVENTS</a>
				</li>
				<li>
					<a href="12.php">Home</a>
				</li>
				<li>
					<a href="add.php">Buat Event</a>
				</li>
			</ul>
		</nav>
    </header>
    <left><h2>Buat Events!</h2></left>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
        </div>
        <div class="form-group">
            <label>Deskripsi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Deskripsi" name="deskripsi" required="required">
        </div>
        <div class="form-group">
            <label>Upload Gambar :</label>
            <input type="file" name="gambar" required="required">
        </div>		
        <div class="form-group">
            <label>Kategori :</label>
                <p><input type = 'checkbox' name= "kategori" value="Online" />Online</p>
                <p><input type = 'checkbox' name= "kategori" value="Offline" />Offline</p>
        </div>	
        <div class = "form-group">
            <label>Tanggal  :</label>
            <input type = "date" class = "form-control" name = "tanggal" required = "required" />
        </div>
        <div class = "form-group">
            <label>Jam Mulai  :</label>
            <input type = "time" class = "form-control" name = "mulai" required = "required" />
        </div>
        <div class = "form-group">
            <label>Jam Berakhir  :</label>
            <input type = "time" class = "form-control" name = "berakhir" required = "required" />
        </div>
        <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat" name="tempat" required="required">
        </div>
        <div class="form-group">
            <label>Harga :</label>
            <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga" required="required">
        </div>   
        <div class="form-group">
            <label>Benefit :</label>
                <p><input type = 'checkbox' name= "benefit" value="Snack" />Snack</p>
                <p><input type = 'checkbox' name= "benefit" value="Sertifikat" />Serifikat</p>
                <p><input type = 'checkbox' name= "benefit" value="Sovenir" />Sovenir</p>
        </div>	
        <input type="submit" name="simpan">
        <a href="12.php">Save Changes</a>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
          $nama = $_POST['nama'];
          $deskripsi = $_POST['deskripsi'];
          $foto = $_POST['foto'];
          $kategori = $_POST['kategori'];
          $date = $_POST['date'];
          $mulai = $_POST['mulai'];
          $berakhir = $_POST['berakhir'];
          $harga = $_POST['harga'];
          $benefit = implode(",",$_POST['benefit']);
          $query=mysql_query("INSERT INTO Event_table(nama, deskripsi, foto, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
           VALUES('$nama','$deskripsi,'$foto','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");  
          if ($query) {
             header("location:12.php");
           } 
        }
        ?>
</body> 
</html>