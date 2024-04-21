<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Ke Perpustakaan Digital</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body >
<video autoplay muted loop poster="poster.jpg" style="position: fixed; z-index: -1; width: 100%; height: 100%; object-fit: cover;">
  <source src="video1.mp4" type="video/mp4">
  <!-- Tambahkan sumber video lainnya di sini jika diperlukan -->
  Maaf, browser Anda tidak mendukung tag video.
</video>


    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>z
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if(isset($_POST['register'])) {
                                        $nama     = $_POST['nama'];
                                        $email    = $_POST['email'];
                                        $alamat   = $_POST['alamat'];
                                        $no_telepon = $_POST['no_telepon'];
                                        $username = $_POST['username']; 
                                        $level    = $_POST['level'];
                                        $password = md5($_POST['password']);
                                            
                                        $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                        if($insert){
                                            echo '<script>alert("Register berhasil"); location.href="index.php";</script>';
                                        } else {
                                            echo '<script>alert("Gagal,silahkan ulangi kembali");</script>';
                                        
                                        }
                                    }



                                    ?>
                                    <form method="post">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                                    <label>Nama Lengkap</label>
                                                </div>
                                            </div>      
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" required name="email" placeholder="Masukkan Email" />
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="text" required name="no_telepon" placeholder="Masukkan No. Telepon" />
                                                    <label>No. Telepon</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <textarea required name="alamat" rows="5" class="form-control" placeholder="Masukkan Alamat"></textarea>
                                                    <label>Alamat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">  
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" type="username" required name="username" placeholder="Masukkan Username" />
                                                    <label>Username</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputPassword" type="password" required name="password" placeholder="Masukkan Password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <label class="small mb-1">Level</label>
                                            <select name="level" class="form-select">
                                                <option value="peminjam">Peminjam</option>
                                               
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                            <a class="btn btn-danger" href="Login.php">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        &copy; 2024 Perpustakaan Digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>