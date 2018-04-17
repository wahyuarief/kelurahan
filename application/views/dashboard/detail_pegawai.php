<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> Detail Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="tile">
            <table class="table table-striped" id="TableListPegawai">
              <?php if ($kategori) { ?>
              <thead>
                <tr>
                  <th width="50px">No Laporan</th>
                  <th>Hal</th>
                  <th width="50px">Tanggal Masuk</th>
                  <th width="50px">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php echo "<div class='tile-title'>".$kategori['nama']."</div>"; foreach ($laporan as $row) { ?>
                  <tr>
                    <td><?php echo $row['no_laporan'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td>
                    <div class="btn-group">
                      <a href="<?=base_url('laporan/lihat/').$row['kat_id'].'/'.$row['id']?>" class="form-control btn btn-sm btn-info">Lihat</a>
                    </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            <?php } else { ?>
              <thead>
                <tr>
                  <th width="50px">NIP</th>
                  <th>Nama</th>
                  <th width="50px">Jabatan</th>
                  <th width="150px">Last Login</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $pegawai['nip'] ?></td>
                  <td><?php echo $pegawai['nama_depan']." ".$pegawai['nama_belakang'] ?></td>
                  <td><?php echo $pegawai['jabatan'] ?></td>
                  <td><?php echo $pegawai['last_login'] ?></td>
                </tr>
              </tbody>
            <?php } ?>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile">
            <div class="text-center">
              <img class="img-fluid rounded mx-auto d-block" src="<?php echo ($pegawai['foto'] ? base_url('uploads/').$pegawai['foto'] : 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg') ?>" alt="User Image"><br>
            </div>
            <?php
            echo "<b>NIP:</b> ".$pegawai['nip']."<br /><b>Nama:</b> ".$pegawai['nama_depan']." ".$pegawai['nama_belakang']."<br /><b>Jabatan:</b> ".$pegawai['jabatan'];
            ?>
          </div>
          <div class="list-group">
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip'] ?>" class="list-group-item list-group-item-action active">Profile</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/surat-masuk" ?>" class="list-group-item list-group-item-action">Surat Masuk</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/surat-keluar" ?>" class="list-group-item list-group-item-action">Surat Keluar</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/surat-tugas" ?>" class="list-group-item list-group-item-action">Surat Tugas</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/surat-keputusan" ?>" class="list-group-item list-group-item-action">Surat Keputusan</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/undangan-masuk" ?>" class="list-group-item list-group-item-action">Undangan Masuk</a>
            <a href="<?php echo base_url('pegawai/detail/').$pegawai['nip']."/undangan-keluar" ?>" class="list-group-item list-group-item-action">Undangan Keluar</a>
          </div>
        </div>
      </div>
    </main>
