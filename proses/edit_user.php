<?php
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//mengambil data surat
if(isset($_GET['id'])){
	
	$id_user		= $_GET['id'];
	$get				= mysql_query("select * from user where id_user='$id_user'",$connect);
	$data			= mysql_fetch_array($get);
}
//proses input
if(isset($_POST['submit'])){
	 
	$tujuan		= $_POST['tujuan'];
	$perihal		= $_POST['perihal'];
	$isi				= $_POST['isi'];
	 
	$query = mysql_query("update user set nama='$nama', password='$pass', akses='$akses' where id_user='$id_user'",$connect);
	echo "<script>alert('Data User berhasil diubah')</script><script>location.href='users.php'</script>";
	 
 }
 
 //fungsi tambahan
 include "../include/form.php"; 
//title page
$titlepage = "Update Surat Masuk";

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
										buka_form();
											buat_textbox('Username','user','',$data['username'],'disabled');
											buat_textbox('Nama','nama','',$data['nama'],'required');
											buat_passbox('Password','pass','Masukan Password','required');
											
											$list[]	= array('val' => '', 'cap' => '--Pilih Akses User--');
											$list[]	= array('val' => '0', 'cap' => 'Administrator');
											$list[] 	= array('val' => '1', 'cap' => 'Petugas Arsip');
											$list[]	= array('val' => '2', 'cap' => 'Pimpinan/Atasan');
											
											buat_combobox('Akses User','akses',$list,$data['akses']);
										
										tutup_form('Simpan','users.php');
									?>
																			
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
<?php include "../include/footer.php";?>
