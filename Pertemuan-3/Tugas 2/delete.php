<?php
	$hapus = $_POST["hapus"];
	
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "universitas");
	$sqlstr = "DELETE FROM mahasiswa WHERE nrp = '$hapus'";
	$hasil = mysqli_query($conn, $sqlstr);

	if($hasil){
			echo "Data berhasil dihapus";
		}else{
			echo "Error".$sqlstr."<br>".mysqli_error($conn);
		}
?>