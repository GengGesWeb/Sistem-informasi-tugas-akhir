<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Tugas Akhir (Dosen)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" >
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a><a class="brand" href="index.html">SISTEM INFORMASI TUGAS AKHIR</a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Akun <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('authentication/auth/ganti_username'); ?>">Ganti Username</a></li>
                                <li><a href="<?php echo base_url('authentication/auth/ganti_password'); ?>">Ganti Password</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $this->session->userdata('nama'); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                     
                                <li><a href="<?php echo site_url('authentication/auth/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li><a href="<?php echo site_url ('mahasiswa/mahasiswa/index') ?>"><i class="icon-dashboard"></i><span>Beranda</span> </a>
                    </li>
                    <li><a href="reports.html"><i class="icon-edit"></i><span>Input Judul Tugas Akhir</span> </a>
                    </li>
                    <li ><a href="<?php echo site_url ('mahasiswa/mahasiswa/ujianproposal') ?>"><i class="icon-list-alt"></i><span>Pendaftaran Ujian Proposal</span>
                    </a></li>
                    <li><a href="shortcodes.html"><i class="icon-bar-chart"></i><span>Hasil Review</span> </a>
                    </li>
                    <!--
                    <li ><a href="charts.html"><i class="icon-check"></i><span>Penentuan Bimbingan</span> </a>
                    </li>
                    <li><a href="shortcodes.html"><i class="icon-user"></i><span>List Dosen</span> </a>
                    </li> -->
                    
                </ul>
            </div>
            <!-- /container -->
        </div>
    </div>