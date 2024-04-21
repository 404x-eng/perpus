<h1 class='mt-4'>Dashboard</h1>
<ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                                    ?>
                                    Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=kategori">Lihat rincian</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4 ">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                                    ?>    
                                    Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=buku">Lihat Buku</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                                    ?>    
                                    Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lihat Ulasan</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                     <?php if ($_SESSION['user']['level'] != 'peminjam') { ?>
                              <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                  <div class="card-body">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                                    ?>
                                    Total user
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=user">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
 <h2 class="text-center mt-5">Buku</h2>
<div class="container">
    <div class="row justify-content-center">
        <?php
        $query_buku = mysqli_query($koneksi, "SELECT * FROM buku");
        // Loop melalui hasil query
        while ($buku = mysqli_fetch_array($query_buku)) {
        ?>
        <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem;">
            <a href="index.php?page=detail_buku&id=<?php echo $buku['id_buku']; ?>">
    <img src="assets/buku/<?php echo $buku['foto']; ?>" class="card-img-top" alt="...">
</a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $buku['judul']; ?></h5>   
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $buku['penulis']; ?></h6>
                
                    <!-- <a href="?page=d" class="btn btn-warning ">Detail</a> -->
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
</div>
<h2 class="text-center mt-5">Profil</h2>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Level User</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['level']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="100">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date('d-m-y'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        