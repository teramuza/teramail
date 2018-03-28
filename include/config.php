<?php	

/********************************************
 ** Database Connection
 **
 ** kamu bisa mengubah data dibawah ini 
 **
 ** dbUser adalah username server databasemu
 ** dbUser default adalah 'root'
 **
 ** dbPass adalah password server databasemu
 ** dbPass default adalah kosong ''
 **
 ** dbName adalah nama databasemu
 ** dbName default adalah db_surat
 ********************************************/

$cfg = array(
		'dbUser' 	=> 'root', //username database
		'dbPass' 	=> '', //password database
		'dbName' 	=> 'db_surat', //database name
		);

/**********************************************
** Company Name
** 
** kamu bisa mengubah data dibawah ini
***********************************************/

$company = array(
		'name' 		 => 'Fobtera Indonesia', //nama company default
		'short_name' => 'Fobtera', //nama panggilan company
		'long_name'  => 'PT Web Technology Fobtera Indonesia', //nama lengkap company
		);

/**********************************************
 ** dilarang keras merubah/menghilangkan credits aplikasi dibawah
 ** dilarang keras merubah data author aplikasi dibawah
 ** all right reserved
 ***********************************************/

/** --Application Credits-- **
** Aplikasi Arsip Surat Masuk dan Keluar
** Author by Teuku Raja
** Bootstrap Template by Edmin - EGrappler
**/ $version = "1.2"; $build_year="2018"; 

/** -- About Author -- **
** E-Mail : thoyani45@gmail.com
** Line   : zacky090300
** IG 	  : @raja.ajaa
** github : /teukuraja
** 
** Terimakasih telah menggunakan aplikasi saya ^_^ 
** --End of Application Credits-- **/


/** Application Information **/

	//database connection
	$connect	= mysql_connect('localhost',$cfg['dbUser'],$cfg['dbPass']);
	mysql_select_db($cfg['dbName'],$connect);

	//company information
	$company_name = $company['long_name'];
	$company_short_name = $company['short_name'];
	$company_intr_name = $company['name'];

/** End of Application Information **/


/** Application Function **/
/**jangan mengubah data dibawah agar aplikasi tetap berjalan dengan baik **/

		//fungsi Generate Token
		function generate($n) {
			$token = NULL;
			$chr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvqxyz0123456789";
			for ($i = 0; $i < $n; $i++) {
				$rIdx = rand(1, strlen($chr));
				$token .=substr($chr, $rIdx, 1);
			}
			return $token;
	 	}

	 	//fungsi Mata Uang IDR
	 	function idr($angka){
           $jadi="Rp.".number_format($angka,0,',','.');
           return $jadi;
		}

		//fungsi DateIndo
		function dateindo($tgl){
				$tanggal = substr($tgl,8,2);
				$bulan = getBulan(substr($tgl,5,2));
				$tahun = substr($tgl,0,4);
				return $tanggal.' '.$bulan.' '.$tahun;		 
		}
			function getBulan($bln){
						switch ($bln){
							case 1:
						 		return "Januari";
								break;
							case 2:
								return "Februari";
								break;
							case 3:
								return "Maret";
								break;
							case 4:
								return "April";
								break;
							case 5:
								return "Mei";
								break;
							case 6:
								return "Juni";
								break;
							case 7:
								return "Juli";
								break;
							case 8:
								return "Agustus";
								break;
							case 9:
								return "September";
								break;
							case 10:
								return "Oktober";
								break;
							case 11:
								return "November";
								break;
							case 12:
								return "Desember";
								break;
						}
			}

		function copyright(){

			global $company_name, $build_year, $version;

			echo '<b class="copyright">&copy;';

			if(date("Y") > $build_year){ 
				echo ' '.$build_year.' - '.date("Y").' '.$company_name;

			}else if(date("Y") < $build_year){
				echo ' '.$build_year.' '.$company_name;
				echo "<script>alert('Tanggal anda tidak akurat, Aplikasi mungkin tidak berjalan dengan baik. Perbaiki setelan tanggal anda!')</script>";

			}else{ 
				echo ' '.$build_year.' '.$company_name;
			};

			echo '</b><br/>Arsip Surat By Teuku Raja. All rights reserved.';
		}

/** End of Application Function **/


/** End of config.php **/
?>