<html>
<body>
	Tunggu Anda Sedang dialihkan
</body>
</html>
<?php
session_start();
if($_SESSION['status'] == "login"){
	header('location:../index.php');
}else{
	header('location:../login.php');
}
?>