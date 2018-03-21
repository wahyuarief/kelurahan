<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i> Surat Keluar</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Surat Keluar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="table-responsive">
              <table class="table table-striped" id="TableListPegawai">
                <thead>
                  <tr>
                    <th width="50px">No Surat</th>
                    <th width="50px">No Registrasi</th>
                    <th>Judul</th>
                    <th width="50px">Masuk</th>
                    <th width="50px">Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($surat_keluar as $row) { ?>
                    <tr>
                      <td><?php echo $row['no_surat'] ?></td>
                      <td><?php echo $row['no_registrasi'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['created_at'] ?></td>
                      <td>Detail</td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
