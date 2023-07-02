<ul class="list-group">
    <li class="list-group-item"><a href="?page=dashboard">Dashboard</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-show">Data Damkar</a></li>
    <li class="list-group-item"><a href="?page=mahasiswa-add">Tambah Data Damkar</a></li>

    <?php
    // diubah pada bagian ini
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // session_start();
    if ($_SESSION['username'] == 'admin') {
        echo '<li class="list-group-item"><a href="?page=user-show">Data Laporan</a></li>
        <li class="list-group-item"><a href="?page=user-add">Tambah Data Laporan</a></li>';
    }
    ?>
    <li class="list-group-item"><a href="logout.php ">Logout</a></li>
</ul>