<?php
include "konek.php";
$nobp = $_GET['kodeTransaksi'];
$query = "DELETE FROM mahasiswa WHERE kodeTransaksi = '$kodeTransaksi'";
mysqli_query(,$koneksi,0$query);
?>
<script type="text/javascript">
	document.location='databayar.php';
</script>
