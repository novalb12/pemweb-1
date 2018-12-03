<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		VRD MUSIC
	</title>
</head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/myStyle.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.4.1/css/all.css'>
<body class="bg">
    <!-- Start of navbar -->
<header>
    <div class="container header" style="width: 100%;">
        <div class="row">
            <!-- Judul Halaman -->
            <div class="col-md-4">
                <a href="<?php echo base_url() ?>Home" style="color: #000; text-decoration: none;">
                    <h1 class="judul">
                        VRD MUSIC
                    </h1>
                </a>
            </div>
            <!-- Search box dan identitas -->
            <div class="col-md-3 col-md-offset-5">
                <table>
                    <tr>
                        <td>
                            <div class="search-box">
                                <input class="search-txt" name="" placeholder="Search">
                                <button class="btn-search" type="submit" onclick="alert('Test')">
                                    <i class="fa fa-search"> </i>
                                </button>
                                 <a class="search-btn" href="#"> 
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo base_url() ?>Login">
                                <button class="btn-login" style='font-size:32px' type="submit" formaction="loginpage.html">
                                    <i class="fas fa-user-circle"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>  
    </div>
     <!-- Navbar -->
    <div>
        <div class="navibar row">
            <div class="col-md-3 col-xs-12">
                <li><a href="<?php echo base_url() ?>Home">Beranda</a></li>
            </div>
            <div class="col-md-3 col-xs-12">
                <li><a href="<?php echo base_url() ?>Rilis">Rilisan Baru</a></li>
            </div>
            <div class="col-md-3 col-xs-12">   
                <li><a href="<?php echo base_url() ?>Kategori">Kategori</a></li>
            </div>
            <div class="col-md-3 col-xs-12">
                <li><a href="<?php echo base_url() ?>Top10">Top 10</a></li>
            </div>    
        </div>
    </div>
</header>