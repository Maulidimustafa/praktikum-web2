<?php include "../connection.php" ?>

<?php
if (isset($_POST['registrasi'])) {
    $idLaporan = $_POST['id_laporan'];
    $idPengguna = $_POST['id_pengguna'];
    $alamat = $_POST['alamat'];
    $tanggalWaktu = $_POST['tanggal_waktu'];
    $koordinatLokasi = $_POST['koordinat_lokasi'];
    $deskripsiKebakaran = $_POST['deskripsi_kebakaran'];
    $statusLaporan = $_POST['status_laporan'];

    $cekIdLaporan = mysqli_query($con, "SELECT * FROM laporan_kebakaran WHERE id_laporan = '$idLaporan'");
    if (mysqli_num_rows($cekIdLaporan) >= 1) {
        echo '<script>alert("ID Laporan sudah digunakan");</script>';
        echo "<meta http-equiv='refresh' content='0 url=?page=user-add'>";
        return false;
    }

    // Simpan laporan ke database
    $exec = mysqli_query($con, "INSERT INTO laporan_kebakaran (id_laporan, id_pengguna, alamat, tanggal_waktu_laporan, koordinat_lokasi, deskripsi_kebakaran, status_laporan) 
                                VALUES ('$idLaporan', '$idPengguna', '$alamat', '$tanggalWaktu', '$koordinatLokasi', '$deskripsiKebakaran', '$statusLaporan')");

    if ($exec === true) {
        echo '<script>alert("Data laporan berhasil ditambahkan");</script>';
    } else {
        echo '<script>alert("Gagal menambahkan data laporan");</script>';
    }
}
?>

<div class="card">
    <div class="card-header">
        <strong>Tambah Data Laporan</strong>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group row">
                <label for="id_laporan" class="col-sm-3 col-form-label">ID Laporan</label>
                <div class="col-sm-9">
                    <input type="text" name="id_laporan" class="form-control" placeholder="ID Laporan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_pengguna" class="col-sm-3 col-form-label">ID Pengguna</label>
                <div class="col-sm-9">
                    <input type="text" name="id_pengguna" class="form-control" placeholder="ID Pengguna" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_waktu" class="col-sm-3 col-form-label">Tanggal Waktu Kejadian</label>
                <div class="col-sm-9">
                    <input type="text" name="tanggal_waktu" class="form-control" placeholder="Tanggal Waktu Kejadian" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="koordinat_lokasi" class="col-sm-3 col-form-label">Koordinat Lokasi</label>
                <div class="col-sm-9">
                    <input type="text" name="koordinat_lokasi" class="form-control" placeholder="Koordinat Lokasi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi_kebakaran" class="col-sm-3 col-form-label">Deskripsi Kebakaran</label>
                <div class="col-sm-9">
                    <input type="text" name="deskripsi_kebakaran" class="form-control" placeholder="Deskripsi Kebakaran" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_laporan" class="col-sm-3 col-form-label">Status Laporan</label>
                <div class="col-sm-9">
                    <input type="text" name="status_laporan" class="form-control" placeholder="Status Laporan" required>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <button type="submit" name="registrasi" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>
