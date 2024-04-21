<h1 class="mt-4">Kategori Buku</h1>
<div class="card">

    <div class="row">
        <div class="col-md-12 p-4">
            <?php
            if ($_SESSION['user']['level'] != 'peminjam') {
            ?>
                <a href="?page=kategori_tambah" class="btn btn-warning  ">+ Tambah Data</a>
                <table class="table table-bordered mt-2" id="dataTable" width="100%" cellspacing="0">
            <?php
            }
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <?php
            if ($_SESSION['user']['level'] != 'peminjam') {
            ?>
                    <th>Aksi</th>
                    <?php
            }
            ?>  
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM kategori");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $i++;  ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td>

                            <?php
                            if ($_SESSION['user']['level'] != 'peminjam') {
                            ?>
                                <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-warning">Ubah</a>
                                <a onclick="return confirm('apakah anda yakin menghapus data ini');" href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-dark">Hapus</a>
                            <?php
                            }
                            ?>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>