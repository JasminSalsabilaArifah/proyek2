<?php 
// KONEKSI-------------------------------------------------------------------------

// $koneksi = mysqli_connect('localhost', 'root', '', 'tabungan_siswa');


$servername = "localhost";
$database = "tabungan_siswa";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



//URL-----------------------------------------------------------
function url(){
	return $url = "//localhost/proyek2/";
}

//SUMMON ADMIN
function summon_admin(){
global $koneksi;

$id = $_SESSION['idtabsis'];

return $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa = '$id'");


}
//SUMMON tabungan
function summon_tbng(){
	global $koneksi;
	
	$id = $_SESSION['idtabsis'];
	
	return $query = mysqli_query($koneksi, "SELECT * FROM tb_tabungan WHERE id_siswa = '$id'");
	
	
	}

// SELECT ADMIN
function select_admin(){
	global $koneksi;
	return mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY tb_siswa DESC");
}


// select tabungan
function select_tabungan(){
	global $koneksi;
	// return  mysqli_query($koneksi, "SELECT  id_tabungan, id_siswa,
	// 															  setoran,
	// 															  penarikan,
	// 															  saldo,
	// 															  sum(penarikan) as 																		  jumlah_penarikan,
	// 															  sum(setoran) as jumlah_setoran,
																  
	// 															  id,
	// 															  nama,
	// 															  jenis_kelamin,
	// 															  kelas,
	// 															  tempat
																		
	// 															  from 
	// 															  siswa, tb_tabungan
	// 															  where
	// 															  id_siswa = id
	// 															  group by nama ASC");
	return mysqli_query($koneksi, "SELECT id_tabungan, nama, kelas, saldo FROM tb_tabungan");
}


// function rupiah 

function rupiah($angka){
	$hasil = "Rp. ". number_format($angka,2,',','.');
	return $hasil;
}

 ?>
