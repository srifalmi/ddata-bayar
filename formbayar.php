<?php

include "konek.php";

if(!empty($_GET['kodeTransaksi'])){
$kodeTransaksi = $_GET['kodeTransaksi'] ;
$simpan = 'lama' ;
$query = mysqli_query($koneksi, "select * from transaksi where kodeTransaksi = '$notrans'");
}
else
{

$simpan = 'baru' ;
$query = mysqli_query($koneksi , "select '' as kodeTransaksi, '' as tanggalTransaksi, '' as namaBarang, '' as hargaBarang, '' as jumlah, '' as totalBayar, '' as kodeTransaksi");
}
  $data = mysqli_fetch_array($query);
?>

<body>
	<h1 style="color:#009;">Form Transaksi</h1>
	<form name="ftransaksi" action="simpanan.php" method="post">
		<input type="hidden" name="simpan" value="<?php echo $simpan ?>">
		<table border="0">
			<tr>
				<th align="left">Kode Transaksi</th>
				<td><input type="text" name="notrans" size="7" maxlength="7" value="<?php echo $data['kode`	']?>"></td>
			</tr>

			<tr>
				<th align="left">Tanggal Transaksi</th>

				<td><input type="date" name="tanggal" size="50" maxlength="50" value="<?php echo $data['tanggalTransaksi']?>"></td>
			</tr>


</tr>
			<tr>
				<th align="left">Nama Barang</th>
				<td><textarea cols="50" rows="5" name="nama"><?php echo $data['namaBarang']?></textarea></td>
			</tr>

			<tr>
				<th align="left">Harga Barang</th>
				<td><input type="text" name="harga" size="20" maxlength="20" value="<?php echo $data['hargaBarang']?>"></td>
			</tr>

			<tr>

			<tr>
				<th align="left">Jumlah Barang</th>
				<td><input type="text" name="jml" size="20" maxlength="20" value="<?php echo $data['jumlah']?>"></td>
			</tr>

			<tr>


			<tr>
				<th align="left">Total Bayar</th>
				<td><input type="text" name="ttl" size="20" maxlength="20" value="<?php echo $data['totalBayar']?>"></td>
				<tr>

				<td colspan="2" align="right"><input type="submit"  value="Simpan"> <input type="button" onClick="location.href=('databayar.php')" value="<<Kembali"></td>
			
			</tr>
		</table>
	</form>
</body>