<?php 
session_start();

//menghapus session
$_SESSION = [];
session_destroy(); 
session_unset();
//hapus cookie
setcookie('id','',time()-3600);
setcookie('key','',time()-3600);
header("Location: Login.php");
 exit;
 ?>