<?php
if (isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,alamat,jenis_kelamin,email,telepon)
VALUES('$nim','$nama','$alamat','$jk','$email','$telepon')") or die(mysqli_error($con));
header("Location:?page=mahasiswa-show");
}
?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <strong>Tambah Data Damkar</strong>
</div>
<div class="card-body">
    <form method="POST" action="?page=mahasiswa-add" class="form-horizontal">
<div class="form-group">
    <label for="nim" class="control-label">ID_Pemadam</label>
    <input type="text" class="form-control" name="nim" placeholder="Masukan ID Pemadam..." required>
</div>
<div class="form-group">
    <label for="nama" class="ontrol-label">Nama_Pemadam</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pemadam..." required>
</div>
<div class="form-group">
    <label for="nama" class="ontrol-label">Alamat_Kantor</label>
    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Kantor..." required>
</div>
<div class="form-group">
    <label for="nama" class="ontrol-label">Nomor_Telepon</label>
    <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan Nomor Telepon..." required>
</div>
<div class="form-group">
    <label for="nama" class="ontrol-label">Wilayah_Kerja</label>
    <input type="text" class="form-control" name="email" placeholder="Masukan Wilayah Kerja..." required>
</div>


    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
</form>
</div>
</div>
</div>
</div>