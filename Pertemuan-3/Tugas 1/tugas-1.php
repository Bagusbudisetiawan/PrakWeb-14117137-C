<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		Masukkan Angka :
		<input type="text" name="angka"> <br/> <br/>

		<button type="submit" name="kirim">Submit</button>
	</form>

	<?php
		function faktorial($x){
			$hasil = 1;

			for ($i=1; $i<=$x ; $i++) { 
				$hasil = $hasil * $i;
			}

			echo "Hasil Faktorial = ".$hasil;
		}

		if (isset($_POST['kirim'])) {
			echo "<br>";
			$angka = $_POST['angka'];
			faktorial($angka);
		}
		
	?>
</body>
</html>