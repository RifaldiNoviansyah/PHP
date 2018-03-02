<?php 
session_start();

//menghapus session
$_SESSION = [];
session_destroy(); 
session_unset();

header("Location: Login.php");
 exit;
 ?>