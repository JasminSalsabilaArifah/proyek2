<?php 
require 'fungsi/fungsi.php';

if (isset($_POST['edit'])) {
	update_admin();
}

foreach (summon_admin() as $adm): 


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profil</title>
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

    .footer-fixed {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
 
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>



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
                 <a href="index.php?m=tabungan&s=awal"><i class="fa fa-user"></i> Tabungan</a>
                    
                
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
    <br>
   
      
   
    <div class="col-sm-99">
      <div class="well">
        <h4>Profil Murid</h4>
       
      </div>


    </div>
         <div class="col-sm-99">
      <div class="well">
       <div class="table-responsive">
       	<table class="table table-borderless">
       		<tbody>
           <tr>
       				<td>Id Siswa :</td>
       				<td><?= $adm['id_siswa'];?></td>
       			</tr>
       			<tr>
       				<td>Nama :</td>
       				<td><?= $adm['nama'];?></td>
       			</tr>
             <td>username :</td>
       				<td><?= $adm['username'];?></td>
       			</tr>
             <tr>
       				<td>Alamat :</td>
       				<td><?= $adm['alamat'];?></td>
       			</tr>
             <td>Kelas :</td>
       				<td><?= $adm['kelas'];?></td>
       			</tr>
       			<tr>
       				<td>Telepon :</td>
       				<td><?= $adm['telepon'];?></td>
       			</tr>
       			<!-- <tr>
       				<td>Foto :</td>
       				<td><img src="img/admin/?>" height="150" data-target="#view_image" data-toggle="modal"> -->

                <!-- modal view image -->
                <div class="modal fade" id="view_image" tabindex="-1" role="dialog" aria-labelledby="view_image" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
          <!--       <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <b><p class="modal-title" id="view_image" style="text-align: center; font-size: 18px;">Edit Data Admin</p></b>
                </div> -->
                <!-- Modal Body -->
              <!--   <div class="modal-body"> </div> -->
                <center><img src="img/admin/<?= $adm['foto'];?>" height="512"></center>
               
              </div>
            </div>
              </td>
       			</tr>
       			<tr>
       				<td>
                <!-- Modal edit -->
                          <div class="modal fade" id="edit-profil<?= $adm['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit-profil<?= $adm['id'] ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <b><p class="modal-title" id="edit-profil<?= $adm['id'] ?>" style="text-align: center; font-size: 18px;">Edit Data Admin</p></b>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                 <form action="" method="POST" enctype="multipart/form-data">
                  <input type="hidden" value="<?= $adm['id'] ?>" name="id">

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" value="<?= $adm['username'];?>" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Masukkan nama">
   
  </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control"  id="exampleInputEmail1" name="password" aria-describedby="emailHelp" placeholder="Masukkan nama">
   
  </div>
    <div class="form-group">
    <label>Nama Admin</label>
    <input type="text" class="form-control" value="<?= $adm['nama'];?>" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan nama">
   
  </div>
    <div class="form-group">
    <label>Telepon Admin</label>
    <input type="text" class="form-control" value="<?= $adm['telepon'];?>" id="exampleInputEmail1" name="telepon" aria-describedby="emailHelp" placeholder="Masukkan nama">
   
  </div>

   <div class="form-group">
    <label>Foto Admin</label>
    <img src="img/admin/<?= $adm['foto'];?>" height="150"><br>
   	 <input type="checkbox" name="ubahfoto" value="true">Klik jika ingin ubah foto <br>
  </div>

      <div class="form-group">
    <label>Masukkan Foto Baru</label>
    <input type="file" name="foto">
   
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
                </div>
              </div>
            </div>
       				</td>
       			</tr>
       		</tbody>
       	</table>
       	
       </div> 	
       
      </div>

      
    </div> 
    
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
</footer>
<script src="<?= url() ?>vendors/jquery/jquery.min.js"></script>
  <script src="<?= url() ?>vendors/js/bootstrap.min.js"></script> </body>
</html>
<?php endforeach; ?>
