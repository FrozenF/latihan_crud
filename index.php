<?php
include 'Crud.php';

$crud = new Crud();
$data = $crud->lihat_data();

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body>
	<a href="form_tambah.php" title="Tambah Data">Tambah Data</a>
	<table id="customers">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Asisten</th>
				<th>Status</th>
				<th>Tanggal Masuk Data</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$num = 1;
			foreach ($data as $key):?>
			<tr>
				<td><?php echo $num++; ?></td>
				<td><?php echo $key['nama_asisten']; ?></td>
				<td><?php echo $key['status']; ?></td>
				<td><?php echo $key['tanggal_dibuat']; ?></td>
				<td><a href="form_edit.php?id=<?php echo $key['id_asisten']; ?>">Edit</a> | <a href="proses_hapus.php?id=<?php echo $key['id_asisten']; ?>">Hapus</a></td>
			</tr>
		<?php endforeach ?>
		</tbody>
		<tfoot>
			<tr>
				<th>No</th>
				<th>Nama Asisten</th>
				<th>Status</th>
				<th>Tanggal Masuk Data</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#customers').DataTable();
	} );
</script>
</body>
</html>
