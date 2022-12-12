<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'tabungan_siswa');
global $koneksi;

$batas = 15;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_tabungan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_tabungan = mysqli_query($koneksi, "SELECT * FROM tb_tabungan LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;

foreach ($data_tabungan as $tab):
  ?>

     <tr>
                              <td><?= $i++;?></td>
                              
                              <td><?=  $tab['id_tabungan'];?></td>
                              <td><?=  $tab['nama'];?></td>
                              <td><?=  $tab['tanggal'];?></td>
                              <td><?=  $tab['setoran'];?></td>
                              <td><?=  $tab['penarikan'];?></td>
                             <td><?=rupiah($tab['saldo']);?></td> 
                              <!--  <td><?= $tab['jumlah_setoran'] - $tab['jumlah_penarikan']; ?></td> -->
                             

                              
                              <td>
      </div>
       
                </div>
              </div>
            </div>

                              </td>
                              </tr>
                            <?php endforeach; ?>
                              
