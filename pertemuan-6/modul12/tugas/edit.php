<?php
    include 'koneksi.php';

    $nim_key = mysqli_real_escape_string($conn, $_POST['edit_nim_key']);
    $nim = mysqli_real_escape_string($conn, $_POST['edit_nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['edit_nama']);
    $prodi = mysqli_real_escape_string($conn, $_POST['edit_prodi']);
    $angkatan = mysqli_real_escape_string($conn, $_POST['edit_angkatan']);

    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan=$angkatan WHERE nim=$nim_key;";
    $res = mysqli_query($conn, $sql);

?>