
<?php
include 'konek.php' ;
$notrans = $_POST['notrans'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jml = $_POST['jml'];
$ttl = $_POST['ttl'];
$simpan = $_POST['simpan']; 


if($simpan =='lama')
{
	$query_edit = mysqli_query($koneksi, "UPDATE transaksi SET tanggalTransaksi = '$tanggal', namaBarang = '$nama', hargaBarang = '$harga', jumlah = '$jml', totalBayar = '$ttl' WHERE kodeTransaksi = '$notrans'");
if($query_edit)
{
echo "Data Berhasil di Edit <br>";
echo "<a href='databayar.php'>Lihat Data</a>";
}
}
else
{

$query_simpan = mysqli_query($koneksi ,"INSERT INTO transaksi VALUES('$notrans','$tanggal','$nama','$harga','$jml','$ttl')",$koneksi) or die("Kesalahan pada Query, Silahkan Periksa Query anda ....");

if($query_simpan)

{
echo "Data Berhasil di simpan... <br>";
echo "<a href='databayar.php'>Lihat Data</a>";
 }
}
?>
