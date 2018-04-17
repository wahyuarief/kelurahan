<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kelurahan Pondok Bambu</title>
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/pe-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    <?php
    foreach($css_files as $file): ?>
    	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
  </head>
  <body>
    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="<?= base_url() ?>"><h1><span class="pe-7s-gleam bounce-in"></span> PONDOK BAMBU</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= base_url('informasi') ?>">Berita</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= base_url('informasi/detail/tentang-kami') ?>">Kelurahan Pondok Bambu</a></li>
                        <li><a href="<?= base_url('informasi/detail/visi-misi') ?>">Visi dan Misi</a></li>
                      </ul>
                    </li>
                    <li><a href="<?= base_url('jadwal') ?>">Jadwal</a></li>
                    <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                    <li><a href="<?= base_url('login') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="content-wrapper">
    <section id="blog" class="white">
    <div class="container">
      <div class="gap"></div>
    <div class="blog">
    <div class="blog-item">
    <div class="blog-content">
      <?php echo $output; ?>
    </div>
    </div>
    </div>
    </div>
    </section><!--/#blog-->
    </div>
    <footer id="footer" class="">
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    &copy; 2014 <a target="_blank" href="http://www.distinctivethemes.com" title="Premium Themes and Templates">Distinctive Themes</a>. All Rights Reserved.
    </div>
    <div class="col-sm-6">
    <ul class="pull-right">
        <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
    </ul>
    </div>
    </div>
    </div>
    </footer><!--/#footer-->
    </div>
    <script src="<?= base_url('assets/') ?>js/plugins.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.3.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="<?= base_url('assets/') ?>js/init.js"></script>
  </body>
</html>
