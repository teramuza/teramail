<?php 
//cek status login
include "include/auth.php"; 

//file configurasi
include "include/config.php";

//menghitung data rincian aplikasi
$count1 = mysql_num_rows(mysql_query("SELECT * FROM inbox",$connect));
$count2 = mysql_num_rows(mysql_query("SELECT * FROM outbox",$connect));
$count3 = mysql_num_rows(mysql_query("SELECT * FROM user",$connect));
$count4 = mysql_num_rows(mysql_query("SELECT * FROM disposisi",$connect));

//title page
$titlepage = "Dashboard";

//header aplikasi
include "include/header.php";

?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
				<?php include "include/menu.php";?>
                     <div class="span9">
                        <div class="content">
						
							<div class="alert alert-success">
								<strong>Hai <?php echo $namausr;?>!</strong> 
								Selamat datang di aplikasi pengarsipan surat PT Web Technology Fobtera Indonesia.<br/> 
								Anda telah login sebagai <?php if($aksesusr == 2){echo "Pimpinan";}else if($aksesusr == 1){echo "Petugas Arsip";}else{ echo "Admin";} ?>. 
								Berikut rincian data aplikasi.
							</div>
							
                            <div class="btn-controls">
							<?php if($aksesusr == 2){ ?>
                                <div class="btn-box-row row-fluid">
                                    <a href="inbox.php" class="btn-box big span4"><i class=" icon-inbox"></i><b><?php echo $count1; ?></b>
                                        <p class="text-muted">
                                            Surat Masuk</p>
                                    </a><a href="outbox.php" class="btn-box big span4"><i class="icon-envelope"></i><b><?php echo $count2; ?></b>
                                        <p class="text-muted">
                                            Surat Keluar</p>
                                    </a><a class="btn-box big span4"><i class="icon-edit"></i><b><?php echo $count4; ?></b>
                                        <p class="text-muted">
                                            Disposisi</p>
                                    </a>
                                </div>
								
								<?php }else{ ?>
								<div class="btn-box-row row-fluid">
                                    <a href="inbox.php" class="btn-box big span3"><i class=" icon-inbox"></i><b><?php echo $count1; ?></b>
                                        <p class="text-muted">
                                            Surat Masuk</p>
                                    </a><a href="outbox.php" class="btn-box big span3"><i class="icon-envelope"></i><b><?php echo $count2; ?></b>
                                        <p class="text-muted">
                                            Surat Keluar</p>
                                    </a><a <?php if($aksesusr == 0){ ?> href="proses/users.php" <?php } ?> class="btn-box big span3"><i class="icon-group"></i><b><?php echo $count3; ?></b>
                                        <p class="text-muted">
                                            Pengguna</p>
                                    </a><a class="btn-box big span3"><i class="icon-edit"></i><b><?php echo $count4; ?></b>
                                        <p class="text-muted">
                                            Disposisi</p>
                                    </a>
                                </div>
								<?php } ?>
								
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
		
<!--footer aplikasi-->
<?php include "include/footer.php";?>
