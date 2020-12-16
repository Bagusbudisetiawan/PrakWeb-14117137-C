<?php
    include 'koneksi.php';

    $nim = mysqli_real_escape_string($conn, $_POST['tambah_nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['tambah_nama']);
    $prodi = mysqli_real_escape_string($conn, $_POST['tambah_prodi']);
    $angkatan = mysqli_real_escape_string($conn, $_POST['tambah_angkatan']);

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi, angkatan) VALUES ('$nim', '$nama', '$prodi', $angkatan);";
    $res = mysqli_query($conn, $sql);

?>