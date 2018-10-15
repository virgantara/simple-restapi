<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'api_server';

$conn = mysqli_connect($host, $user, $pass, $db) or die("Connection Error");

if($conn){

	$query = "SELECT * FROM mahasiswa";

	$result = mysqli_query($conn, $query);

	$json = [];
	while($row = mysqli_fetch_array($result)){
		$json[] = [
			'nim' => $row['nim'],
			'nama' => $row['nama'],
			'jurusan' => $row['jurusan'],
			'fakultas' => $row['fakultas'],
		];
	}

	echo json_encode($json);

	mysqli_close($conn);
}


?>