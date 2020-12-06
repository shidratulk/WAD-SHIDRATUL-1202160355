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

	<a href="product.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="inputaksi.php" method="post">		
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>					
			</tr>	
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>					
			</tr>	
			<tr>
				<td>Description</td>
				<td><input type="text" name="stock"></td>					
			</tr>	
            <tr>
				<td>Stock</td>
				<td><input type="text" name="description"></td>					
			</tr>	
            <tr>
				<td>Image file input</td>
				<td><input type="file" name="img" required="required"><td>			
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>