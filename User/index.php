<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"tabungan";
$jawal="Admin || Admin";
switch($modul){
    case 'admin': $aktif="Admin"; $judul="Modul $jawal"; include "modul/admin/profil.php"; break;
   	case 'tabungan':default: $aktif="Tabungan"; $judul="Modul $jawal"; include "modul/tabungan/index.php"; break;
}
?>
