<?php

class Crud{
	public function lihat_data(){
		$con = @mysqli_connect("localhost", "root", "", "latihan");
		if (!$con) {
			echo "Error: " . mysqli_connect_error();
			exit();
		}

		$sql = "SELECT * FROM daftar_asisten";
		$hasil = mysqli_query($con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($hasil)){
			$result[] = $row;
		}
		return $result;
	}

	public function tambah_data($nama_asisten, $status){
		$con = @mysqli_connect("localhost", "root", "", "latihan");
		if (!$con) {
			echo "Error: " . mysqli_connect_error();
			exit();
		}
		$sql = "INSERT INTO daftar_asisten VALUES (NULL, '$nama_asisten', '$status', CURRENT_TIMESTAMP)";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Berhasil Menambahkan";
		}else{
			echo "gagal";
		}
	}

	public function cari_data($id_asisten){
		$con = @mysqli_connect("localhost", "root", "", "latihan");
		if (!$con) {
			echo "Error: " . mysqli_connect_error();
			exit();
		}

		$sql = "SELECT * FROM daftar_asisten where id_asisten = $id_asisten";
		$hasil = mysqli_query($con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($hasil)){
			$result[] = $row;
		}
		return $result[0];
	}

	public function ubah_data($id,$nama_asisten,$status){
		$con = @mysqli_connect("localhost", "root", "", "latihan");
		if (!$con) {
			echo "Error: " . mysqli_connect_error();
			exit();
		}
		$sql = "UPDATE daftar_asisten SET nama_asisten = '$nama_asisten', status = '$status', tanggal_dibuat=CURRENT_TIMESTAMP WHERE id_asisten = $id";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Berhasil Edit";
		}else{
			echo "gagal";
		}
	}

	public function hapus_data($id){
		$con = @mysqli_connect("localhost", "root", "", "latihan");
		if (!$con) {
			echo "Error: " . mysqli_connect_error();
			exit();
		}
		$sql = "DELETE FROM daftar_asisten WHERE id_asisten = $id";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Berhasil Hapus";
		}else{
			echo "Gagal";
		}
	}

}
?>