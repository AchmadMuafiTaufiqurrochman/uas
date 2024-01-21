<?php
include("../../koneksi.php");

$id_pelanggan = $_GET["id_pelanggan"];

$hasil = mysqli_query(
	$conn,
	"DELETE FROM pelanggan
	WHERE id_pelanggan = '$id_pelanggan'"
);

if($hasil){
?>
	<script>
	window.location.href = "../data_master.php?berhasil=hapus";
	</script>
<?php
}
?>