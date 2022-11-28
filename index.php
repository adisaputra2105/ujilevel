<?php
require_once "apps/koneksi.php";
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Absensi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/styles/style.css">

    <style>
        @import url('assets/fonts/Poppins-Regular.ttf');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="overflow-hidden">
    <!-- Alert -->
    <?php if (isset($_SESSION['info'])) : ?>
        <div class="info-data" data-infodata="<?php echo $_SESSION['info']; ?>"></div>
    <?php
        session_destroy();
    endif;
    ?>

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-3 mx-auto mt-5 col-md-7 ">
        <div class="card card0 border-1 shadow-lg rounded-4 mt-5 ">
            <div class="d-flex">
                <div class="col-md-6">
                    <div class="card1 ">
                        <div class="row justify-content-centerborder-line">
                            <img src="assets/img/gambar1.jpg" width="500px" style="border-top-left-radius:20px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-items-center mt-5 mb-0">
                    <div class="card2 card border-0 align-items-center px-0">
                        <div class="row mb-4">
                            <div class="text-uppercase fw-bold text-center fs-2 text-dark">
                                <span class="">Login admin</span>
                            </div>
                            <div class="line"></div>
                        </div>
                        <form action="auth/login_proses.php" method="POST">
                            <div class="mb-4">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="username" name="username" class="form-control" id="inputUsername" placeholder="Masukan Username" required>
                            </div>
                            <div class="mb-4">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukan Password" required>
                            </div>
                            <div class="mb-2">
                                <button type="submit" name="submit" class="btn w-100 text-white pt-2 pb-2" style="background-color: #0002A1;">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 rounded-bottom" style="background-color: #0002A1;">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2 text-white text-center">Copyright &copy; 2022. ADI SAPUTRA</small>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/script/jquery.js"></script>

    <script src="assets/script/sweetalert.js"></script>

    <script src="assets/script/alert.js"></script>

</body>

</html>