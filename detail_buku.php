<?php

$id_buku = $_GET['id'];

$query_detail_buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $id_buku");
$detail_buku = mysqli_fetch_array($query_detail_buku);
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <img src="assets/buku/<?php echo $detail_buku['foto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $detail_buku['judul']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $detail_buku['penulis']; ?></h6>
                    <p class="card-text"><?php echo $detail_buku['deskripsi']; ?></p>
                    <div class="text-center">
                        <a href="?page=home" class="btn btn-warning">Kembali</a>
                        <?php if ($_SESSION['user']['level'] == 'peminjam') { ?>
                            <a href="?page=peminjaman_tambah&id_buku=<?php echo $id_buku; ?>" class="btn btn-dark">Pinjam</a>
                            <!-- Tombol Ulasan -->
                            <!-- <a href="?page=ulasan_tambah&id=<?php echo $id_buku; ?>" class="btn btn-success">Ulasan</a> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>