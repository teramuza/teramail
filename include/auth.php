<?php
//untuk mengecek status login dan variabel data login pengguna

session_start();
$arsipsurat = 	'';
$arsipsurat	=	((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$arsipsurat.=	"://".$_SERVER['HTTP_HOST']; 
$arsipsurat.=	str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$assets		= 	$arsipsurat. "assets/";
$include	=	$arsipsurat. "include/";
$proses		=	$arsipsurat. "proses/";
$inbox		=	$arsipsurat. "inbox.php";
$outbox		=	$arsipsurat. "outbox.php";
$usrmgr		=	$arsipsurat. "user.php";
$profil		=	$include. "profil.php";
$aksesusr	=	$_SESSION['akses'];
$usrnm		=   $_SESSION['username'];
$namausr	=	$_SESSION['nama'];
$idusr		=	$_SESSION['id_user'];

//jika status tidak login akan dikembalikan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:".$arsipsurat."/login.php");
}
?>
