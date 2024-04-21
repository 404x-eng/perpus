<form method="post">
    <?php
        if(isset($_POST['submit'])) {
            $id_buku = $_POST['id_buku'];
            $id_user = $_SESSION['user']['id_user'];
            $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
            $status_peminjaman = $_POST['status_peminjaman'];
            $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman) VALUES('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");

            if($query) {
                echo '<script>alert("Tambah Data Berhasil.")</script>';
            } else {
                echo '<script>alert("Tambah Data Gagal.")</script>';
            }
        }
    ?>
    <!-- Input hidden untuk menyimpan ID buku -->
    <input type="hidden" name="id_buku" value="<?php echo isset($_GET['id_buku']) ? $_GET['id_buku'] : ''; ?>">

    <div class="row mb-3">
        <!-- Formulir peminjaman -->
    </div>
    <h1 class="mt-4">Peminjaman Buku</h1>
    <div class="row mb-3">
        <div class="col-md-2">Tanggal Peminjaman</div>
        <div class="col-md-8">
            <input min="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="tanggal_peminjaman">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-2">Tanggal Pengembalian</div>
        <div class="col-md-8">
            <input min="<?php echo date('Y-m-d'); ?>" type="date" class="form-control" name="tanggal_pengembalian">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-2">Status Peminjaman</div>
        <div class="col-md-8">
            <select name="status_peminjaman" class="form-control">
                <option value="menunggu konfirmasi">Menunggu Konfirmasi</option>
            </select>   
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <button type="submit" class="btn btn-white" name="submit" value="submit">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            <a href="?page=peminjaman" class="btn btn-dark">Kembali</a>
        </div>
    </div>
</form>