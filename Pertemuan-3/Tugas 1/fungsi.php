<?php
	function nama($kt, $color="red"){
		$panjang_kata = strlen($kt);
		$harga = 0;
		
		if ($panjang_kata>0 && $panjang_kata<=10) {
			$harga = 300 * $panjang_kata;
		}elseif ($panjang_kata>10 && $panjang_kata<=20) {
			$harga = 500 * $panjang_kata;
		}else{
			$harga = 700 * $panjang_kata;
		}

		echo '<font color="'.$color.'">'.$kt.'</font> <br>';
		echo '<font color="'.$color.'">'.$harga.'</font> <br><br>';
	}

	$kata = $_GET['nama'];
	$warna = $_GET['warna'];

	if($_GET['warna'] == ""){
		nama($kata);
	}else{
		nama($kata, $warna);
	}
?>