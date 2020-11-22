<?php
	$cari = $_POST["cari"];
	
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "universitas");
	$hasil = mysqli_query($conn, "SELECT nrp,mahasiswa.nama,alamat,jurusan.nama FROM mahasiswa JOIN jurusan ON mahasiswa.id_jur = jurusan.id_jur WHERE mahasiswa.nama LIKE '%$cari%'");

	$jumlah = mysqli_num_rows($hasil);
	echo "<br>"."Data yang Ditemukan : $jumlah"."<br><br>";

	while ($baris = mysqli_fetch_array($hasil)) {
		$foto = $baris[2];

		echo "NRP : ";
		echo $baris[0]."<br>";
		echo "Nama : ";
		echo $baris[1]."<br>";
		echo "Foto : ";
		echo "<img src = foto/$foto width = '100' height = '100'> <br>";
		echo "Jurusan : ";
		echo $baris[3]."<br><br>";
	}
?>