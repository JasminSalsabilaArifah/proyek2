
<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link rel="icon" type="image/png" href="<?= url() ?>vendors/img/icon2.png">
<link rel="stylesheet" href="<?= url() ?>vendors/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="<?= url() ?>vendors/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= url() ?>vendors/css/bootstrap.min.css">
</head>
<body>

</body>
</html>
<?php 


global $koneksi;

$user = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM tb_siswa WHERE username = '$user' AND password = '$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu>0) {
	session_start();
	$_SESSION['idtabsis'] = $b['id_siswa'];
	$_SESSION['namatabsis'] = $b['nama'];
	$_SESSION['kelastabsis'] = $b['kelas'];
	$_SESSION['alamattabsis'] = $b['alamat'];
	$_SESSION['telepontabsis'] = $b['telepon'];
	$_SESSION['passtabsis'] = ($b['password']);
	$_SESSION['usertabsis'] = $b['username'];
	header("location: index.php?m=tabungan");

}else{
	echo "<div class='alert alert-danger alert-dismissable'>
  			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  			Username atau Password Anda Salah Silahkan Coba Lagi.
  			</div>";
}

 ?>
