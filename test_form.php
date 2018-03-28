<?php include "include/form.php";

buka_form();
	
	$list[]	= array();
	$list[]	= array('val' => 'Test', 'cap' => 'test');
	
	buat_combobox('TESTING','test',$list,'');
	
tutup_form();