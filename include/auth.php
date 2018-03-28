<?php
//untuk mengecek status login dan variabel data login pengguna

session_start();
$arsipsurat	=	"http://".$_SERVER['SERVER_NAME']."/app_surat/";
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