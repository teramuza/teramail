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
//mengambil data disposisi surat
$query = mysql_query ("select * from disposisi where id_surat='$idsurat'",$connect);

//title page
$titlepage = "Disposisi";

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
                                <div class="module-head"><?php if($aksesusr == 2){ ?>
								<a href="input_disposisi.php?id=<?php echo $idsurat; ?>" class="btn btn-module pull-right"><i class="icon-plus"></i> Tambah Data</a><?php } ?>
                                    <h2><?php echo $titlepage;?> </h2> 
                                </div>
                                <div class="module-body table">
								
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped display"
                                        width="100%">
                                        <thead>
                                            <tr>
												<th>No Disposisi</th>
                                                <th>Kepada</th>
												<th>Status</th>
												<th>Tanggapan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										while($data = mysql_fetch_array ($query)){ ?>
                                            <tr>
                                                <td><?php echo $data['id_disposisi'];?></td>
                                                <td><?php echo $data['kepada'];?></td>
												<td><?php echo $data['status'];?></td>
												<td><?php echo $data['tanggapan'];?></td>
                                            </tr>
										<?php } ?>
										</tbody>
									</table>
									
								</div>
								<a href="../inbox.php" class="btn btn-module pull-right"><i class="icon-arrow-left"></i> Kembali</a>
							</div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include "../include/footer.php";?>