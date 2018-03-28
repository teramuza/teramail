<?php 
//cek status login
include "../include/auth.php"; 

//cek akses user
if($aksesusr != 0){
	echo "<script>alert('Anda tidak memiliki izin untuk mengakses halaman ini!')</script><script>location.href='".$arsipsurat."'</script>";
}

//file configurasi
include "../include/config.php";

$sql = "SELECT * from user";
$query = mysql_query ($sql,$connect);

//title page
$titlepage = "Manage User";

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
								<a href="input_user.php" class="btn btn-module pull-right"><i class="icon-plus"></i> Tambah Pengguna</a>
                                    <h2><?php echo $titlepage;?> </h2> 
                                </div>
                                <div class="module-body table">
								
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id User</th>
												<th>Nama</th>
												<th>Username</th>
												<th>Hak Akses</th>
												<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										while($data = mysql_fetch_array ($query)){ ?>
                                            <tr>
                                                <td><?php echo $data['id_user'];?></td>
                                                <td><?php echo $data['nama'];?></td>
												<td><?php echo $data['username'];?></td>
												<td><?php if($data['akses'] == 0){echo "Admin"; }else if($data['akses'] == 1){echo "Petugas"; }else{echo "Pimpinan"; }?></td>
												<td>
													<div class="btn-group">
														<a href="edit_user.php?id=<?php echo $data['id_user'];?>" type="button" class="btn btn-small">Edit</a>
														<a type="button" class="btn dropdown-toggle" data-toggle="dropdown">
															<span class="caret"></span>
														</a>
															<ul class="dropdown-menu">
																<li><a href="delete_user.php?id=<?php echo $data['id_user'];?>">Hapus</a></li>
															</ul>
													</div>
												</td>
                                            </tr>
										<?php } ?>
										</tbody>
									</table>
									
								</div>
							</div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include "../include/footer.php";?>