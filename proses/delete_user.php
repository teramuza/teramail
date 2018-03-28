<?php

include "../include/config.php";

if(isset($_GET['id'])){
	$id_user	= $_GET['id'];
	$sql		= mysql_query("delete from user where id_user='$id_user'",$connect);
	header("location:users.php");
}
	?>