<?php
// Display selected user data based on id
// Getting id from url
    $id = $_GET['id'];
// Fetech user data based on id
    $result = mysqli_query($con, "SELECT * FROM pemadam_kebakaran WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
    $nim = $data['nim'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $jk = $data['jenis_kelamin'];
    $email = $data['email'];
    $telepon = $data['telepon'];
}
?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <h3 class="panel-title">Ubah Data Damkar</h3>
</div>
<div class="card-body">
    <form method="POST" action="?page=mahasiswa-update" class="form-horizontal">
<div class="form-group">
    <label for="nim" class="col-sm-2 control-label">ID Pemadam</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="nim" value="<?php echo $nim; ?>" required>
</div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Pemadam</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
</div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Alamat Kantor</label>
<div class="col-sm-10">
   
</div>
</div>
<div class="form-group">
    <label for="alamat" class="col-sm-2 control-label">Nomor Telepon</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required>
</div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Wilayah Kerja</label>
<div class="col-sm-10">
    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
</div>
</div>
<div class="form-group">
    <label for="telepon" class="col-sm-2 control-label">Aksi</label>
<div class="col-sm-10">
    <input type="number" class="form-control" name="telepon" value="<?php echo $telepon; ?>" required>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
    <input type="submit" name="update" class="btn btn-primary" value="Update">
    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
</div>
</div>
</form>
</div>
</div>
</div>