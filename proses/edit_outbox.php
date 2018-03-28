<?php
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//mengambil data surat
if(isset($_GET['id'])){
	
	$id_surat		= $_GET['id'];
	$get				= mysql_query("select * from outbox where id_surat='$id_surat'",$connect);
	$data			= mysql_fetch_array($get);
}
//proses input
if(isset($_POST['submit'])){
	 
	$tujuan		= $_POST['tujuan'];
	$perihal		= $_POST['perihal'];
	$isi				= $_POST['isi'];
	 
	$query = mysql_query("update outbox set tujuan='$tujuan', perihal='perihal', isi='$isi' where id_surat='$id_surat'",$connect);
	echo "<script>alert('Data berhasil diubah')</script><script>location.href='../outbox.php'</script>";
	 
 }
 
 //fungsi tambahan
 include "../include/form.php";
 include "../include/dateindo.php";
 
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
											
											buat_textbox('Nomor Surat','no_surat','Example XXX/SDS/FBTR/II/2018',$data['no_surat'],'disabled');
											buat_textbox('Jenis Surat','jenis','',$data['jenis'],'disabled');
											buat_textbox('Tanggal Surat','tanggal','',tgl_indo($data['tanggal']),'disabled');
											buat_textbox('Pengirim','pengirim','Masukan Nama Pengirim',$data['pengirim'],'disabled');
											buat_textbox('Tujuan','tujuan','Masukan Nama Tujuan',$data['tujuan'],'required');
											buat_textbox('Perihal','perihal','Example Liburan Akhir Tahun',$data['perihal'],'required');
											buat_textarea('Isi Surat','isi',$data['isi']);
										
										tutup_form('Simpan',$inbox);
									?>
																			
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
<?php include "../include/footer.php";?>