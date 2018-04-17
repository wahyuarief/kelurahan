<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?php echo ($foto ? base_url('uploads/').$foto : 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg') ?>" alt="User Image" width="48" height="48">
        <div>
          <p class="app-sidebar__user-name">{nama_pegawai}</p>
          <p class="app-sidebar__user-designation">{jabatan}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo base_url('dashboard') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="app-menu__item" href="<?php echo base_url('pegawai/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Pegawai</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url('laporan/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Laporan</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url('informasi/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Informasi</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url('galeri/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Galeri</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url('jadwal/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Jadwal</span></a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <?php foreach ($katlap as $row) { ?>
              <li><a class="treeview-item" href="<?php echo base_url('laporan/detail/').$row['slug'] ?>"><i class="icon fa fa-circle-o"></i> <?= $row['nama'] ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a class="app-menu__item" href="<?php echo base_url('pegawai') ?>"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Daftar Pegawai</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('informasi/list') ?>"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Daftar Berita</span></a></li>
      </ul>
    </aside>
