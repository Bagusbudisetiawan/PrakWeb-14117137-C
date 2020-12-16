<?php
    include 'koneksi.php';

    $nim = mysqli_real_escape_string($conn, $_POST['hapus_nim']);

    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
    $res = mysqli_query($conn, $sql);

?>