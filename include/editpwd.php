<?php
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";


 
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
                                	//proses login
if(isset($_POST['submit'])){
	 
	$get		= mysql_query("select * from user where id_user='$idusr'",$connect);
	$data		= mysql_fetch_array($get);
	$old		= md5($_POST['old']);

	if($old != $data['password']){
		echo '<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Ups!</strong> Password kamu salah 
									</div>';
	}else{
		$token	= generate(12);
		$query = mysql_query("update user set token='$token' where id_user='$idusr'",$connect);
		echo "<script>location.href='change_password.php?token=".$token."'</script>";
	}
 }
                                	?>
								<div class="alert">
										Kamu harus login terlebih dahulu untuk melanjutkan!
									</div>
									<?php
										buka_form();

											buat_textbox('Username','user','',$usrnm,'disabled');
											buat_passbox('Password','old','Masukan Password','required autofocus');
									?>
										<div class="control-group">
											<div class="controls">
												<a href="#" class="btn btn-module"><i class="icon-arrow-left"></i> Kembali</a>
												<button name="submit" type="submit" class="btn btn-primary">Lanjut <i class="icon-arrow-right"></i></button>
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