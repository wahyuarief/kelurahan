<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i> List Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">List Pegawai</a></li>
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
