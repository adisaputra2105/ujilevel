<?php
session_start();
include_once("../apps/base_url.php");
include_once("../apps/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/styles/style.css">
    <style>
        @font-face {
        font-family: "Poppins-Regular";
        src: url("../assets/fonts/Poppins-Regular.ttf");
        }
        * {
            font-family: "Poppins-regular";
        }

        @media print {

            .print,
            .navbar {
                display: none;
            }

            .container {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg p-2" style="background-color:#0002A1;">
        <div class="container">
            <a class="navbar-brand text-white fs-4 text-uppercase fw-bold" href="#">Absensi XII RPL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="text-white nav-link <?= $active == 'dashboard' ? 'active' : '' ?> fs-6" href="<?php echo $base_url; ?>views/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link <?= $active == 'absensi' ? 'active' : '' ?> fs-6" href="<?php echo $base_url; ?>views/absensi.php">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link <?= $active == 'siswa' ? 'active' : '' ?> fs-6" href="<?php echo $base_url; ?>views/siswa.php">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link <?= $active == 'laporan' ? 'active' : '' ?> fs-6" href="<?php echo $base_url; ?>views/laporan_siswa.php">Laporan Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3 btn-logout" name="" style="background-color: #FF5B00; border-radius: 5px;" href="<?php echo $base_url; ?>auth/logout_proses.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (isset($_SESSION['info'])) : ?>
        <div class="info-data" data-infodata="<?php echo $_SESSION['info']; ?>"></div>
    <?php
        unset($_SESSION['info']);
    endif;
    ?>