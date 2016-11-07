<html>
	<head>
		<title>Pemesanan</title>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])){
				include ("koneksi.php");
				
				$nama				= $_POST["nama"];
				$alamat				= $_POST["alamat"];
				$no_tlp				= $_POST["no_tlp"];
				$nama_barang		= $_POST["nama_barang"];
				$jumlah_barang		= $_POST["jumlah_barang"];
				
				$sql = "INSERT INTO tbl_pemesanan
						VALUES (null, '$nama', '$alamat', '$no_tlp', '$nama_barang', '$jumlah_barang')";
						
				$hasil = mysql_query($sql) or die("Query gagal dieksekusi");
				
				if($hasil ==TRUE){
					echo "Barang yang di pesan sudah ditambah <br /><br />";
				}
				else{
					echo "Gagal menambahkan pesanan barang";
				}
			}
		?>
		<form action="pesan.php" method="post">
		<marquee direction="left" bgcolor="green"><b><font size= 5 color="white">>>Selamat Datang di Online Shop Suka-Suka<<</font></b></marquee><br>
		
		<table border=1 cellpadding=1 bgcolor="blue" width=100%>
		<tr>
		<td>
		<font size= 5>
		<center>
<pre>
<label for="Nama"><b>Nama                       : </label><input type="text" name="nama" placeholder="Nama"/>

<label for="Alamat">Alamat                     : </label><input type="text" name="alamat" placeholder="Alamat"/>

<label for="Nomer_telepon">No Telepon                 : </label><input type="text" name="no_tlp" placeholder="No Telpon"/>

<label for="Nama_barang">Nama Barang yang dipesan   : </label><input type="text" name="nama_barang" placeholder="Barang 1, Barang 2,dst "/>

<label for="Jumlah_barang">Jumlah Barang yang dipesan : </b></label><input type="text" name="jumlah_barang" placeholder="Jumlah 1, Jumlah 2,dst"/>

			
				 <input type="submit" name="submit" value="Simpan"/>
</pre>		
		</center>
		</font>
		</td>
		</tr>	
		</table>	
			
		
			
		</form>
	</body>
</html>