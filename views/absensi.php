<?php
$active = 'absensi';
$title = 'Absensi | Admin';
include("../layouts/header.php");

date_default_timezone_set('Asia/jakarta');
$today = date("Y-m-d");

$queryAbsensi = mysqli_query($koneksi, "SELECT * FROM tbl_absensi JOIN tbl_siswa ON tbl_siswa.id_siswa = tbl_absensi.id_siswa ORDER BY tanggal DESC");

$queryRow = mysqli_query($koneksi, "SELECT * FROM tbl_absensi JOIN tbl_siswa ON tbl_siswa.id_siswa = tbl_absensi.id_siswa WHERE tanggal = $today");

$row = mysqli_num_rows($queryRow);
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header " style="background-color: #0002A1;">
            <div class="d-flex justify-content-between align-items-center py-1 px-1">
                <h4 class="text-white mt-1">Absensi</h4>
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #FF5B00;">Tambah Data Absen</button>
            </div>
        </div>
        <div class="card-body">
            <table id="table" class="table table-striped table-bordered  d-md-block d-lg-table overflow-auto">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($queryAbsensi as $absensi) {
                    ?>
                        <tr>
                            <td class="text-end"><?= $no++ ?></td>
                            <td><?= $absensi['nama'] ?></td>
                            <td class="text-center"><?= $absensi['keterangan'] ?></td>
                            <td class="text-center"><?= $absensi['tanggal'] ?></td>
                            <td class="text-center">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $no ?>" class="btn btn-sm btn-warning text-white">Ubah</button>
                                <a button class="btn btn-delete btn-sm btn-danger text-white" href="aksi-absensi.php?id_absen=<?= $absensi['id_absen'] ?>">Hapus</a>
                            </td>
                        </tr>
                        

                        <!-- Modal edit -->
                        <div class="modal fade" id="modalEdit<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="aksi-absensi.php" method="POST">
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="hidden" name="id_absen" value="<?= $absensi['id_absen'] ?>">
                                                    <input type="text" class="form-control" name="nama" value="<?= $absensi['nama'] ?>" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Keterangan</label>
                                                    <select class="form-select" name="keterangan" required>
                                                        <option hidden>-- Pilih Keterangan --</option>
                                                        <option value="Hadir">Hadir</option>
                                                        <option value="Izin">Izin</option>
                                                        <option value="Sakit">Sakit</option>
                                                        <option value="Alpa">Alpa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" name="update" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Absensi Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi-absensi.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <select class="form-select" name="nama">
                            <option hidden>-- Pilih Siswa --</option>
                            <?php $query = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa NOT IN(SELECT id_siswa FROM tbl_absensi WHERE tanggal = ' " . $today . " ') ORDER BY  nama ASC");

                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $data['id_siswa'] ?>"><?= $data['nama'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <select class="form-select" name="keterangan" required>
                            <option hidden>-- Pilih Keterangan --</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Alpa">Alpa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal-absen" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal-absen" name="tanggal" value="<?= $today ?>" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="submit">Simpan Absen</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php") ?>