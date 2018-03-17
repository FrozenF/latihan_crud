<?php
	include 'Crud.php';
	$id = $_GET['id'];
	$crud = new Crud();
	$crud->hapus_data($id);
	header('Location: index.php');
?>