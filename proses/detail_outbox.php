<?php 
//cek status login
include "../include/auth.php"; 

//file configurasi
include "../include/config.php";

//mengambil data surat
if(isset($_GET['id'])){
	$id_surat 	= $_GET['id'];
	$query 		= mysql_query ("select * from outbox where id_surat='$id_surat'",$connect);
	$data 		= mysql_fetch_array ($query);
}

//fungsi tambahan 
include "../include/dateindo.php";

//title page
$titlepage = "Detail Surat Keluar";

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
								<a target="_blank" href="print.php?id=<?php echo $id_surat;?>" class="btn btn-module pull-right"><i class="icon-print"></i> Print</a>
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
                                                <th>Tujuan</th>
												<td><?php echo $data['tujuan'];?></td>
                                            </tr>
											<tr>
                                                <th>Perihal</th>
												<td><?php echo $data['perihal'];?></td>
                                            </tr>
											<tr>
                                                <th>Tanggal Surat</th>
												<td><?php echo tgl_indo($data['tanggal']);?></td>
                                            </tr>
											<tr>
                                                <th>Isi Surat</th>
												<td><?php echo $data['isi'];?></td>
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
