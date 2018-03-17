<?php
	include 'Crud.php';

	$crud = new Crud();
	$nama_asisten = $_POST['nama_asisten'];
	$status = $_POST['status'];
	$crud->tambah_data($nama_asisten, $status);
	header('Location: index.php');
?>