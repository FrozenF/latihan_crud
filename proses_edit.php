<?php
	include 'Crud.php';

	$crud = new Crud();
	$id = $_POST['id'];
	$nama_asisten = $_POST['nama_asisten'];
	$status = $_POST['status'];
	$crud->ubah_data($id,$nama_asisten, $status);
	header('Location: index.php');
?>