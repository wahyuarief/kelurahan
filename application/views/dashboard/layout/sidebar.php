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
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <?php foreach ($katlap as $row) { ?>
              <li><a class="treeview-item" href="<?php echo base_url('laporan/detail/').$row['slug'] ?>"><i class="icon fa fa-circle-o"></i> <?= $row['nama'] ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a class="app-menu__item" href="<?php echo base_url('pegawai') ?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pegawai</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('informasi/list') ?>"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Berita</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('jadwal/list') ?>"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Jadwal</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('galeri/list') ?>"><i class="app-menu__icon fa fa-image"></i><span class="app-menu__label">Galeri</span></a></li>
      </ul>
    </aside>
