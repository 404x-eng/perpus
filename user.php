<h1 class="mt-4">User Information</h1>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="register.php" class="btn btn-warning"> <i class="fa fa-plus"></i> Tambah User</a>
        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Username</th>
            <th>Level</th>
            <th>Password</th>
            
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM user");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['no_telepon']; ?></td>
              <td><?php echo $data['username']; ?></td>
              <td><?php echo $data['level']; ?></td>
              <td><?php echo $data['password']; ?></td>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>