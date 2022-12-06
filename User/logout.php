<?php
session_start();
unset($_SESSION['idtabsis']);
unset($_SESSION['namatabsis']);
unset($_SESSION['kelastabsis']);
unset($_SESSION['alamattabsis']);
unset($_SESSION['telepontabsis']);
unset($_SESSION['passtabsis']);
unset($_SESSION['usertabsis']);

echo "<script>window.location='http://localhost/proyek2/user/login.php'</script>";
//session_destroy();

?>
