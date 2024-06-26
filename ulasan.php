<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="?page=ulasan_tambah&&id=<?php echo $id_buku ?>" class="btn btn-warning  ">+ Tambah Data</a>
        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
          <tr>
            <th>No</th>
            <th>User</th>   
            <th>Buku</th>
            <th>Ulasan</th>
            <th>Rating</th>
            <?php
                                if($_SESSION['user']['level'] !='peminjam'){
                            ?>
            <th>Aksi</th>
            <?php
                                }
                                ?>
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['judul']; ?></td>
              <td><?php echo $data['ulasan']; ?></td>
              <td><?php echo $data['rating']; ?></td>
              <?php
                                if($_SESSION['user']['level'] !='peminjam'){
                            ?>
                <td>
                  <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Ubah</a>
                  <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                </td>
              <?php } ?> 
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </div>

  </div>
</div>