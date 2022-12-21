<?php 
require 'fungsi/fungsi.php';
foreach (summon_admin() as $adm): 

if (isset($_POST['simpan'])) {
  insert_siswa();
}

if (isset($_POST['hapus-siswa'])) {
  hapus_siswa();
}
if (isset($_POST['edit'])) {
  edit_siswa();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Siswa</title>
  <script>
 
function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
 
 
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= url() ?>vendors/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="<?= url() ?>vendors/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= url() ?>vendors/css/bootstrap.min.css">

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?m=siswa&s=awal">Siswa</a></li>
        <li><a href="index.php?m=kelas&s=awal">Kelas</a></li>
        <li><a href="index.php?m=tabungan&s=awal">Tabungan</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">

        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               <img src="img/admin/image.png" height="50"> </i> <?php echo $adm['nama']; ?>
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li>
                 <a href="index.php?m=admin&s=profil"><i class="fa fa-user"></i> Profil</a>
                    
                
                </li><br>
                <li>
                  <a href="logout.php" onclick="return confirm('yakin ingin logout?');"> <i class="fa fa-sign-out"></i> Logout</a>
                 
                  
                </li>
              </ul>
            </li>
          </ul>
      </nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
       <ul class="nav nav-pills nav-stacked">
        <li   class="active"><a href="index.php?m=siswa&s=awal"><i class="fa fa-users" aria-hidden="true"></i>
Siswa</a></li>
        <li><a href="index.php?m=kelas&s=awal"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
Kelas</a></li>
        <li><a href="index.php?m=tabungan&s=awal"><i class="fa fa-book" aria-hidden="true"></i>

Tabungan</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <!-- Button trigger modal -->
      <div class="well">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Tambah data
</button>

<!-- modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah data siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>NIK</label>
    <input type="number" class="form-control" id="ids" name="id_siswa" aria-describedby="emailHelp" placeholder="Masukkan NIK">
    <small class="form-text text-muted">Masukkan NIK</small>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukkan nama">
    <small class="form-text text-muted">Masukkan nama</small>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan username">
    <small class="form-text text-muted">Masukkan Username</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" id="pass" name="pass" aria-describedby="emailHelp" placeholder="Masukkan password">
    <small class="form-text text-muted">Masukkan password</small>
  </div>
  <!-- SELECT KELAS -->


    <label>Kelas</label>
    <td>
    <select class="form-control" name="kelas" required="">
    <?php 

  global $koneksi;

  $sql = "SELECT * FROM tb_kelas";

  $hasil = mysqli_query($koneksi, $sql);

                                                

  foreach ($hasil as $kelas):
                                                    
                                                     

   ?>

  <option value="<?php echo $kelas['nama_kelas'];?>"><?php echo $kelas['nama_kelas']; ?></option>
   <?php endforeach; ?>
                                                   
  </select>
    <!-- <input type="text" class="form-control" aria-describedby="emailHelp" name="kelas" placeholder="Masukkan kelas"> -->
    
 

  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
   <textarea class="form-control" name="alamat"></textarea>
    <small id="alamat" class="form-text text-muted">Masukkan Alamat</small>
  </div>
 <div class="form-group">
    <label>Nomor telepon</label>
  <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon">
    <small id="emailHelp" class="form-text text-muted">Masukkan nomor telepon</small>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
      </div>
      <script type="text/javascript">
                
                    var ids = document.getElementById('is_siswa')
                    // var nama = document.getElementById('nama')
                    // var username = document.getElementById('username')
                    // var pass = document.getElementById('pass')
                    // var alamat = document.getElementById('alamat')
                    // var notlp = document.getElementById('telepon')


                    ids.addEventListener('keyup', function(){
                      if(setoran.value == ""){
                        message2.textContent = 'Kolom tidak boleh kosong!'
                        document.getElementById('endButton').disabled = true;
                      }else if (setoran.value) {
                        message2.textContent = ''
                        document.getElementById('endButton').disabled = false;
                      }
                    })


                  </script>
        </form>
    </div>
  </div>
</div>
      </div>

<div class="row">
  <div class="col-sm-12">
    <div class="well">
      <form action="" method="POST">
        <label>Cari</label>
        <input type="text" name="cari" placeholder="Cari nama siswa" required onkeypress='return harusHuruf(event)'>
        <input type="submit" name="go" value="Cari" class="btn btn-success">
      </form>
    </div>
  </div>
</div>

       <div class="row">
        <div class="col-sm-12">
          <div class="well">
             <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                  <thead>
                    <tr>
                        <th>Id Murid</th> 
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Username</th>
                        <th>Aksi</th>                  
                    </tr>
                  </thead>
                <tbody>     
                    <?php 
                      $i = 1;
                      include 'paging.php';

                     ?>
                          

                              
                </tbody>
                    </table>
                                    
                        </div>
          </div>
            <center><ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?m=siswa&s=awal&halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?m=siswa&s=awal&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?m=siswa&s=awal&halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
              </center> 
        </div>

      </div> 


    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
  </div>
</footer>
  <script src="<?= url() ?>vendors/jquery/jquery.min.js"></script>
  <script src="<?= url() ?>vendors/js/bootstrap.min.js"></script> </body>
</html>
<?php endforeach; ?>

