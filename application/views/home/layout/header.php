<div id="preloader"></div>
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
                        <li><a href="<?= base_url('informasi/detail/visi-dan-misi') ?>">Visi dan Misi</a></li>
                      </ul>
                    </li>
                    <li><a href="<?= base_url('jadwal') ?>">Jadwal</a></li>
                    <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                    <li><a href="<?= base_url('login') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
