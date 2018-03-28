<?php 
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//mengambil data surat
if(isset($_GET['id'])){
	
	$idsurat		= $_GET['id'];
	$get				= mysql_query("select * from inbox where id_surat='$idsurat'",$connect);
	$surat			= mysql_fetch_array($get);
	$no_surat		= $surat['no_surat'];
}
//proses input
if(isset($_POST['submit'])){
	 
	 $kepada		= $_POST['kepada'];
	 $status		= $_POST['status'];
	 $tanggapan	= $_POST['tanggapan'];
	 
	 $query = mysql_query("insert into disposisi values ('','$idsurat','$idusr','$no_surat','$kepada','$status','$tanggapan')",$connect);
	 echo "<script>alert('Data berhasil ditambah')</script><script>location.href='disposisi.php?id=".$idsurat."'</script>";
 }
 //fungsi tambahan
 include "../include/form.php";
 
//title page
$titlepage = "Input Surat Masuk";

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
											
											buat_textbox('Kepada','kepada','Example Bag Administrasi','','required');
											
											$list[]	= array('val' => '', 'cap' => '--Pilih Status Surat--');
											$list[]	= array('val' => 'Diterima', 'cap' => 'Diterima');
											$list[] 	= array('val' => 'Pending', 'cap' => 'Pending');
											$list[]	= array('val' => 'Ditolak', 'cap' => 'Ditolak');
											
											buat_combobox('Status Surat','status',$list,'');
											buat_textbox('Tanggapan','tanggapan','Masukan Tanggapan','','');
										
										tutup_form('Simpan',$outbox);
									?>
																			
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
		
<!--footer aplikasi-->
<?php include "../include/footer.php";?>