<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-indent fa-3x"></i>
            <div class="info">
              <h6>Surat Masuk</h6>
              <p><b><?php echo count($surat_masuk) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-outdent fa-3x"></i>
            <div class="info">
              <h6>Surat Keluar</h6>
              <p><b><?php echo count($surat_keluar) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-tasks fa-3x"></i>
            <div class="info">
              <h6>Surat Tugas</h6>
              <p><b><?php echo count($surat_tugas) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-gavel fa-3x"></i>
            <div class="info">
              <h6>Surat Keputusan</h6>
              <p><b><?php echo count($surat_keputusan) ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title">Struktur Pegawai</div>
            halo halo
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Surat Masuk</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($surat_masuk as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Surat Keluar</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($surat_keluar as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Surat Tugas</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($surat_tugas as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Surat Keputusan</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($surat_keputusan as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Undangan Masuk</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($undangan_masuk as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title">Undangan Keluar</div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10px">No</th>
                  <th>Hal</th>
                  <th width="120px">Tanggal Masuk</th>
                </tr>
                <?php $i=1;foreach ($undangan_keluar as $row) { ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <a href="#">Selengkapnya</a>
          </div>
        </div>
      </div> -->
    </main>
