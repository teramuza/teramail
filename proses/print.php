<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(../assets/fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data Surat Tugas</title>
<body onload='window.print()'>
<?php
error_reporting(0);
session_start();
include "../include/config.php"; include "../include/dateindo.php";
if(isset ($_GET['id'])){
$print 		= $_GET['id'];
	$sql 		= "SELECT * FROM outbox where id_surat = '$print'";
	$data 		= mysql_fetch_array (mysql_query ($sql,$connect));
	$no_surat	= $data['no_surat'];
	$jenis		= $data['jenis'];
	$tanggal	= $data['tanggal_surat'];
	$perihal	= $data['perihal'];
	$pengirim	= $data['pengirim'];
	$tujuan		= $data['tujuan'];
	$isi			= $data['isi'];
}
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img width='150px' src="../assets/images/logo.png"></td>
</tr> 
<tr>
    <td align="center"><h2 style='margin-bottom:-5px' align='center'>PT Web Technology<br> Fobtera Indonesia</h2></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Sandratex No. 62a Rempoa - Ciputat Timur <br> Telp. (+62) 895-2551-2887, Kode Pos. 15412</p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align='center'><?php echo $jenis; ?></h3></td>
</tr> 
</table>
<br/>
<table width='100%'>
<tr>
    <td><p>Nomor	: <?php echo $no_surat; ?></p></td>
</tr>
<tr><td colspan='2'>Perihal	: <?php echo $perihal?></td></tr>
<tr><td>Kepada	: <?php echo $tujuan?></td>
</table>
<br>


<table width='100%'>
<?php echo $isi ?>
</table>

<p>Demikian <?php echo $jenis;;?> Ini diberikan untuk dipergunakan sebagaimana Mestinya.</p>



<br>
<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
        <?php $p = mysql_fetch_array(mysql_query("SELECT * FROM tanda_tangan where id_tanda_tangan='$_GET[jabatan]'")); ?>
        <table>
            <tr><td width="130px">Dikeluarkan di </td><td>: Jakarta</td></tr>
            <tr><td>Pada Tanggal </td><td>: <?php echo tgl_indo(date("Y-m-d")); ?></td></tr>
        </table><br>
        <center>
          CEO FOBTERA<br><br><br><br>

          <u>TEUKU RAJA</u><br>
          <br>
        </center>
    </td>
  </tr>
</table> 
</body>