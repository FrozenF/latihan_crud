<?php
	$con = @mysqli_connect("localhost", "root", "", "latihan");
	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}else{
		echo "Koneksi Success";
	}
?>