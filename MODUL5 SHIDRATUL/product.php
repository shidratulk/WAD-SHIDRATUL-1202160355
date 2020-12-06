<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header> 
		<nav class="menu">
			<ul>
				<li>
                    <a href="home.php">Home</a>
				</li>
				<li>
					<a href="product.php">Product</a>
				</li>
				<li>
					<a href="order.php">Order</a>
				</li>
                <li>
					<a href="history.php">History</a>
				</li>
			</ul>
		</nav>
	</header>
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="inputpro.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>		
		</tr>
		<?php 
		include "connect.php";
		$query_mysql = select ("SELECT * FROM products")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['price']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Delete</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
        
      
</body>
</html>