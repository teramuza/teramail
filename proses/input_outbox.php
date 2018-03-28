<?php
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//proses input
if(isset($_POST['submit'])){
	 
	 $no_surat		= $_POST['no_surat'];
	 $jenis			= $_POST['jenis'];
	 $tanggal		= $_POST['tanggal'];
	 $pengirim		= $_POST['pengirim'];
	 $tujuan		= $_POST['tujuan'];
	 $perihal		= $_POST['perihal'];
	 $isi				= $_POST['isi'];
	 
	 $sql		= mysql_query("select * from outbox where no_surat='$no_surat'",$connect);
	 $cek	= mysql_num_rows($sql);
	 
	 if($cek > 0){
		 echo "<script>alert('Nomor Surat Sudah digunakan!')</script>";
	 }else{
		 $query = mysql_query("insert into outbox values ('','$idusr','$jenis','$tanggal','$no_surat','$pengirim','$tujuan','$perihal','$isi')",$connect);
		 echo "<script>alert('Data berhasil ditambah')</script><script>location.href='../outbox.php'</script>";
	 }
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
											
											buat_textbox('Nomor Surat','no_surat','Example XXX/SDS/FBTR/II/2018','','required');
											
											$list[]	= array('val' => '', 'cap' => '--Pilih Jenis Surat--');
											$list[]	= array('val' => 'Surat Edaran', 'cap' => 'Surat Edaran');
											$list[] 	= array('val' => 'Pengumuman', 'cap' => 'Pengumuman');
											$list[]	= array('val' => 'Surat Segera', 'cap' => 'Surat Segera');
											$list[]	= array('val' => 'Nota', 'cap' => 'Nota');
											$list[]	= array('val' => 'Memo', 'cap' => 'Memo');
											$list[]	= array('val' => 'Surat Rahasia', 'cap' => 'Surat Rahasia');
											$list[]	= array('val' => 'Surat Dinas', 'cap' => 'Surat Dinas');
											
											buat_combobox('Jenis Surat','jenis',$list,'');
											buat_datebox('Tanggal Surat','tanggal','','required');
											buat_textbox('Pengirim','pengirim','Masukan Nama Pengirim','','required');
											buat_textbox('Tujuan','tujuan','Masukan Nama Tujuan','','required');
											buat_textbox('Perihal','perihal','Example Liburan Akhir Tahun','','required');
											buat_textarea('Isi Surat','isi','');
										
										tutup_form('Simpan',$outbox);
									?>
																			
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
<?php include "../include/footer.php";?>