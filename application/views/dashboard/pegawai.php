<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i> List Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <a href="<?php echo base_url('pegawai/tambah'); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Pegawai</a>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="table-responsive">
              <table class="table table-striped" id="TableListPegawai">
                <thead>
                  <tr>
                    <th width="10px">NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pegawai as $row) { ?>
                    <tr>
                      <td><?php echo $row['nip'] ?></td>
                      <td><?php echo $row['nama_depan']." ".$row['nama_belakang'] ?></td>
                      <td><?php echo $row['jabatan'] ?></td>
                      <td><?php echo $row['keterangan'] ?></td>
                      <td><a href="<?php echo base_url('pegawai/detail/').$row['nip'] ?>" class="btn btn-sm btn-info">Lihat</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
