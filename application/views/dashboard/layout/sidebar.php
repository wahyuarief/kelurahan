<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo ($foto ? base_url('assets/img/').$foto : 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg') ?>" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{nama_pegawai}</p>
          <p class="app-sidebar__user-designation">{jabatan}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo base_url() ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('pegawai/tambah'); ?>"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Tambah Pegawai</span></a></li>
        <li><a class="app-menu__item" href="<?php echo base_url('pegawai') ?>"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">List Pegawai</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url('surat/masuk') ?>"><i class="icon fa fa-circle-o"></i> Surat Masuk</a></li>
            <li><a class="treeview-item" href="<?php echo base_url('surat/keluar') ?>"><i class="icon fa fa-circle-o"></i> Surat Keluar</a></li>
            <li><a class="treeview-item" href="<?php echo base_url('surat/tugas') ?>"><i class="icon fa fa-circle-o"></i> Surat Tugas</a></li>
            <li><a class="treeview-item" href="<?php echo base_url('surat/keputusan') ?>"><i class="icon fa fa-circle-o"></i> Surat Keputusan</a></li>
            <li><a class="treeview-item" href="<?php echo base_url('undangan/masuk') ?>"><i class="icon fa fa-circle-o"></i> Undangan Masuk</a></li>
            <li><a class="treeview-item" href="<?php echo base_url('undangan/keluar') ?>"><i class="icon fa fa-circle-o"></i> Undangan Keluar</a></li>
          </ul>
        </li>
      </ul>
    </aside>
