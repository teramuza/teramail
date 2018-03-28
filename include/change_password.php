<?php
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//cek token
if(isset($_GET['token'])){
	if(empty($_GET['token'])){
		echo "<script>location.href='editpwd.php'</script>";
	}else{
		$token = $_GET['token'];
		$get   = mysql_query("select * from user where token='$token'",$connect);
		$cek   = mysql_num_rows($get);
		$data   = mysql_fetch_array($get);

		if($cek == 1){
			$username = $data['username'];
		}else{
			echo "<script>location.href='editpwd.php'</script>";
		}
	}
}else{
	echo "<script>location.href='editpwd.php'</script>";
}

 //fungsi tambahan
 include "../include/form.php";
 
//title page
$titlepage = "Ubah Password";

//header aplikasi
include "../include/header.php";
 
 ?>
 
 <div class="wrapper">
            <div class="container">
			
                <div class="row">
				<?php include "../include/menu.php";?>
                     <div class="span9">
                        <div class="content">
						
                            <div class="module">
                                <div class="module-head">
                                    <h2><?php echo $titlepage;?> </h2> 
                                </div>
                                <div class="module-body">
								
<?php
//proses input
if(isset($_POST['submit'])){
	 

	$pass		= md5($_POST['pass']);
	$valid		= md5($_POST['valid']);

	if($valid != $pass){
		echo '<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Ups!</strong> Password Tidak Sama 
									</div>';
	}else{
		$query = mysql_query("update user set password='$pass', token='' where username='$username'",$connect);
		echo "<script>alert('Password berhasil diubah')</script><script>location.href='".$arsipsurat."'</script>";
	}
 }
										buka_form();

											buat_textbox('Username','user','',$username,'disabled');
											buat_passbox('Password Baru','pass','Masukan Password Baru','required autofocus');
											buat_passbox('Konfirmasi','valid','Ulangi Password Baru','required');
									?>
										<div class="control-group">
											<div class="controls">
												<a href="editpwd.php" class="btn btn-module"><i class="icon-arrow-left"></i> Kembali</a>
												<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php include "../include/footer.php";?>