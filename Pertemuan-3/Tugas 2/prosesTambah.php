<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Simpan Data Mahasiswa</h1>
	<?php
		$nrp = $_POST["nrp"];
		$nama = $_POST["nama"];

		$nama_foto = $_FILES['alamat']['name'];
		$ekstensi_foto = array('png', 'jpg');
		$x = explode('.', $nama_foto);
		$ekstensi = strtolower(end($x));
		$tipe = $_FILES['alamat']['type'];
		$ukuran = $_FILES['alamat']['size'];
		$temp = $_FILES['alamat']['tmp_name'];
		
		$jurusan = $_POST["jurusan"];

		$conn = mysqli_connect("localhost", "root", "") or die("Koneksi Gagal");
		mysqli_select_db($conn, "universitas");

		if (in_array($ekstensi, $ekstensi_foto)=== true) {
			if ($ukuran < 1044070) {
				move_uploaded_file($temp, 'foto/'.$nama_foto);
				$sqlstr = "INSERT INTO mahasiswa(nrp, nama, alamat, id_jur) VALUES('$nrp', '$nama', '$nama_foto', '$jurusan')";
				$hasil = mysqli_query($conn, $sqlstr);

				if ($hasil) {
					echo "Data berhasil ditambah";
				}else {
					echo "Error : ".$sqlstr."<br>".mysqli_error($conn);
				}
			}else {
				echo "Ukuran foto terlalu besar";
			}
		}else {
			echo "Ekstensi file tidak sesuai";
		}
	?>
</body>
</html>