<?php
include "konek.php";
$query=mysqli_query($koneksi,"SELECT * FROM transaksi") or die("KESALAHAN PADA QUERY ANDA, DI CEK LAGI YA..!")
	?>
	<body>
	<table border="2">
	<caption>Data Transaksi</caption>
	<tr>
	<th>Kode Transaksi</th>
	<th>Tanggal Transaksi</th>
	<th>Nama Barang</th>
	<th>Harga Barang</th>
	<th>Jumlah Barang</th>
	<th>Total Bayar<th>
	
	</tr>
	<?php $no = 1 ;
	     while($data=mysqli_fetch_array($query)){
	     	?>
	     	<tr>
	     	<td><?php echo $no ?></td>
	     	<td><?php echo $data['kodeTransaksi']?></td>
	     	<td><?php echo $data['tanggalTransaksi']?></td>
	     	<td><?php echo $data['namaBarang']?></td>
	     	<td><?php echo $data['hargaBarang']?></td>
	     	<td><?php echo $data['jumlah']?></td>
	     	<td><?php echo $data['totalBayar']?></td>

	     	<td><input type="button" onClick="Pesan=confirm('YAKIN MAU DIHAPUS??');
	     		if(pesan)location.href=('hapuskan.php?kodeTransaksi=<?php echo $data['kodeTransaksi']?>'); return false;"value="Hapus">
	     		<input type="button"onClick="location.href=('formbayar.php?kodeTransaksi=<?php echo $data['kodeTransaksi']?>')" value="Edit">
	     	</td>

	     	</tr>
	     	<?php
	     	$no++;

	     } ?>
	</table>
	<a href="formbayar.php">Tambah Data</a>
	</body>

