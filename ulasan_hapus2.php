<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan=$id");


$id_buku = $_GET['id_buku'];
$query1 = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku=$id_buku");
$data = mysqli_fetch_array($query1);


?>
<script>
  alert('Hapus data berhasil');
  location.href = "?page=detail_buku&&id=<?php echo $id_buku ?>";
</script>