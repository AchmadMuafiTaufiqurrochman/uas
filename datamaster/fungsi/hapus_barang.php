<?php
include("../../koneksi.php");

$id_nota = $_GET["id_nota"];

$hasil = mysqli_query(
	$conn,
	"DELETE FROM nota
	WHERE id_nota = '$id_nota'"
);

if($hasil){
?>
	<script>
	window.location.href = "../data_master.php?berhasil=hapus";
	</script>
<?php
}
?>