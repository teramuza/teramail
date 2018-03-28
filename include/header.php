<html>
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titlepage;?> - Arsip Surat <?php echo $company_short_name;?></title>
        <link type="text/css" href="<?php echo $assets;?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $assets;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $assets;?>css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $assets;?>images/icons/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>
                    <a class="brand" href="<?php echo $arsipsurat;?>">Arsip Surat <?php echo $company_short_name;?> </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown mobile-only"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $inbox;?>">Surat Masuk</a></li>
                                    <li><a href="<?php echo $outbox;?>">Surat Keluar</a></li>
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $namausr; ?>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $include;?>editpwd.php">Edit Password</a></li>
                                    <li><a href="<?php echo $include;?>logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>