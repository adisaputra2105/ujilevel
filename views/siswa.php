<?php
$active = 'siswa';
$title = 'Siswa | Admin';
include("../layouts/header.php");

$querySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa ORDER BY nama ASC")
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header " style="background-color: #0002A1;">
            <div class="d-flex justify-content-between align-items-center py-1 px-1">
                <h4 class="text-white mt-1">Siswa</h4>
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #FF5B00;">Tambah Data Siswa</button>
            </div>
        </div>
        <div class="card-body">
            <table id="table" class="table table-striped table-bordered  d-md-block d-lg-table overflow-auto">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($querySiswa as $siswa) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $siswa['nama'] ?></td>
                            <td><?= $siswa['email'] ?></td>
                            <td><?= $siswa['alamat'] ?></td>
                            <td><?= $siswa['notelp'] ?></td>
                            <td class="text-center">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $no ?>" class="btn btn-sm btn-warning text-white">Ubah</button>
                                <a button class="btn btn-delete btn-sm btn-danger text-white" href="aksi-siswa.php?id_siswa=<?= $siswa['id_siswa'] ?>">Hapus</a>
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
                                    <form method="POST" action="aksi-siswa.php">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'] ?>">
                                                <input type="text" class="form-control" name="nama" value="<?= $siswa['nama'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="Email" class="form-control" name="email" value="<?= $siswa['email'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?= $siswa['alamat'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">No Telepon</label>
                                                <input type="number" class="form-control" name="notelp" value="<?= $siswa['notelp'] ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success" name="update">Simpan</button>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="aksi-siswa.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Siswa" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="Email" class="form-control" name="email" placeholder="Masukan Email Siswa" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Siswa" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>
                        <input type="number" class="form-control" name="notelp" placeholder="Masukan No Telepon Siswa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include("../layouts/footer.php") ?>