<?php
$active = 'dashboard';
$title = 'Dashboard | Admin';
include("../layouts/header.php");

date_default_timezone_set('Asia/jakarta');
$today = date('Y-m-d');

$queryAbsensi = mysqli_query($koneksi, "SELECT * FROM tbl_absensi JOIN tbl_siswa ON tbl_siswa.id_siswa = tbl_absensi.id_siswa WHERE  tbl_absensi.tanggal = '$today' ORDER BY nama ASC");
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header align-items-center text-center py-2" style="background-color: #0002A1;">
            <h5 class="text-white mt-1">Data Harian Absensi Siswa</h5>
        </div>
        <div class="card-body">
            <table id="table" class="table table-striped table-bordered  d-md-block d-lg-table overflow-auto">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($queryAbsensi as $absensi) {
                    ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $absensi['nama'] ?></td>
                            <td class="text-center"><?= $absensi['keterangan'] ?></td>
                            <td class="text-center"><?= $absensi['tanggal'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php") ?>