<?php

include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/admin/title.php"; break;
	case 'profil': include "modul/admin/profil.php"; break;
}
?>
