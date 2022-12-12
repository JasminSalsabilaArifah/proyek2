<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'tabungan_siswa');
global $koneksi;

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$idsi = 'id_siswa';

$data = mysqli_query($koneksi, "SELECT * FROM tb_tabungan " );
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_tabungan = mysqli_query($koneksi, "SELECT * FROM tb_tabungan  where id_siswa=$idsi LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;

foreach (summon_tbng() as $tab):
  ?>
     <tr>
                              <td><?= $i++;?></td>
                              <td><?=  $tab['nama'];?></td>
                              <td><?=  $tab['kelas'];?></td>
                              <td><?=  $tab['tanggal'];?></td>
                              <td><?=  $tab['setoran'];?></td>
                              <td><?=  $tab['penarikan'];?></td>
                             <td><?=rupiah($tab['saldo']);?></td> 
                              <!--  <td><?= $tab['jumlah_setoran'] - $tab['jumlah_penarikan']; ?></td> -->
                             

                              
                              <td>

                              <!-- Modal Hapus -->
                            <form action="" method="POST">
                      <div class="modal fade" id="hapus-admin<?= $tab['id_tabungan'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-admin<?= $tab['id_tabungan'] ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <b><p class="modal-title" id="hapus-admin<?= $tab['id_tabungan'] ?>" style="text-align: center; font-size: 18px;">Apakah anda yakin ingin dihapus?</p></b>
                        </div>
                        <div class="modal-body">
                          <div class="modal-body">
                   
                          <P>ID tabungan</P>
                          <b><p><?= $tab['id_tabungan']; ?></p></b>

                          <p>Nama</p>
                          <b><p><?= $tab['nama'];?></p></b>

                          <p>Kelas</p>
                          <b><p><?= $tab['kelas'];?></p></b>

                          <p>Saldo</p>
                          <b><p><?=rupiah($tab['saldo']);?></p></b>
                        
                       
                        
                       
                          <input type="hidden" name="id_tabungan" value="<?= $tab['id_tabungan'] ?>" class="form-control" hidden>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                    </form><br>
                              <!-- Modal Lihat Detail-->
          <div class="modal fade" id="edit-siswa<?= $tab['id_tabungan'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit-siswa<?= $tab['id_tabungan'] ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <b><p class="modal-title" id="edit-siswa<?= $tab['id_tabungan'] ?>" style="text-align: center; font-size: 18px;">Lihat Detail Tabungan</p></b>
                </div>
                <div class="modal-body">
                 
   <P>ID tabungan</P>
                          <b><p><?= $tab['id_tabungan']; ?></p></b>

                          <p>Nama</p>
                          <b><p><?= $tab['nama'];?></p></b>

                          <p>Kelas</p>
                          <b><p><?= $tab['kelas'];?></p></b>

                          <p>Setoran</p>
                          <b><p><?= rupiah($tab['setoran']);?></p></b>

                          <p>Penarikan</p>
                          <b><p><?=rupiah($tab['penarikan']);?></p></b>


                          <p>Saldo</p>
                          <b><p><?=rupiah($tab['saldo']);?></p></b>
                        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a target="_blank" href="index.php?m=tabungan&s=print&id_siswa=<?= $tab['id_siswa'];?>"><button type="submit" name="edit" class="btn btn-primary">Print</button></a>
      </div>
       
                </div>
              </div>
            </div>

                              </td>
                              </tr>
                            <?php endforeach; ?>
                              
