# Project Title

Aplikasi Pengarsipan Surat Sederhana PHP - TeraMail

## Getting Started

Ubah konfigurasi Aplikasi di include/config.php

```
$cfg = array(
		'dbUser' 	=> 'root', //username database
		'dbPass' 	=> '', //password database
		'dbName' 	=> 'db_surat', //database name
		);
```

### Installing

Masukan nama company/perusahaan/organisasi kamu di file config.php

ubah dibagian berikut

```
$company = array(
		'name' 		 => '', //nama company default
		'short_name' => '', //nama panggilan company
		'long_name'  => '', //nama lengkap company
		);
```

example

```
$company = array(
		'name' 		 => 'Fobtera Indonesia', //nama company default
		'short_name' => 'Fobtera', //nama panggilan company
		'long_name'  => 'PT Web Technology Fobtera Indonesia', //nama lengkap company
		);
```


## Built With

* [PHP 5](http://php.net/) - The php version used
* [Edmin](https://www.egrappler.com/responsive-bootstrap-admin-template-edmin/) - Application template
* Time

## Versioning

Version : 1.2. Build Year : 2018

## Authors

* **Teuku Raja** - *Developer* - [テラ](https://fb.com/fobtera)

Terima kasih telah menggunakan aplikasi saya ^_^
