<?php 
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//mengambil data surat
if(isset($_GET['id'])){
	$view = $_GET['id'];
	$query = mysql_query ("select * from inbox where id_surat='$view'",$connect);
	$data = mysql_fetch_array ($query);
}

//title page
$titlepage = "Detail Surat Masuk";

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
								<a href="disposisi.php?id=<?php echo $view;?>" class="btn btn-module pull-right"><i class="icon-edit"></i> Disposisi</a>
                                    <h2><?php echo $titlepage;?> </h2> 
                                </div>
                                <div class="module-body table">
								
                                    <table class="table" width="100%">
                                        <tbody>
                                            <tr>
                                                <th>No Surat</th>
												<td><?php echo $data['no_surat'];?></td>
                                            </tr>
											<tr>
                                                <th>Pencatat</th>
												<td><?php $cek= mysql_query("select * from user where id_user='$data[id_user]'"); $pencatat = mysql_fetch_array($cek); echo $pencatat['nama']; ?></td>
                                            </tr>
											<tr>
                                                <th>Jenis</th>
												<td><?php echo $data['jenis'];?></td>
                                            </tr>
											<tr>
                                                <th>Pengirim</th>
												<td><?php echo $data['pengirim'];?></td>
                                            </tr>
											<tr>
                                                <th>Perihal</th>
												<td><?php echo $data['perihal'];?></td>
                                            </tr>
											<tr>
                                                <th>Tanggal Kirim</th>
												<td><?php echo dateindo($data['tanggal_kirim']);?></td>
                                            </tr>
											<tr>
                                                <th>Tanggal Terima</th>
												<td><?php echo dateindo($data['tanggal_terima']);?></td>
                                            </tr>
                                        </tbody>
									</table>
									
								</div>
								<a href="../outbox.php" class="btn btn-module pull-right"><i class="icon-arrow-left"></i> Kembali</a>
							</div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
<!--footer aplikasi-->
<?php include "../include/footer.php";?>
