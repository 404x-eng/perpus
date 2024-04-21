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
        <title>Login Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>   
    </head>

    <body >
    <video autoplay muted loop poster="poster.jpg" style="position: fixed; z-index: -1; width: 100%; height: 100%; object-fit: cover;">
  <source src="video3.mp4" type="video/mp4">
</video>

<!-- Konten halaman Anda -->

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4 text-white">Login Perpustakaan Digital</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_POST['login'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                                
                                            $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                                            $cek = mysqli_num_rows($data);
                                            if ($cek > 0) {
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
                                            } else {
                                                echo '<script>alert("Maaf, Username/Password salah");</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control bg-secondary id="inputEmail" type="text" name="username" placeholder="Enter Username" />
                                                <label for="inputEmail" class="text-white">Username</label>
                                    </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control bg-secondary" id="inputPassword" type="password" name="password" placeholder="Enter Password" />
                                                <label for="inputPassword"><h6 class="text-white">Password</h6></label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <button class="btn bg-transparent text-primary " type="submit" name="login" value="login">Login</button>
                                        <a class="btn  bg-transparent text-danger" href="register.php">Register</a>
                                    </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3 text-white ">
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