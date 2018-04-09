<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Tambah Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Tambah Pegawai</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>
            <form method="post" enctype="multipart/form-data">
              <?php foreach($listData as $da){ ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nomor Induk Pegawai</label>
                    <input type="number" name="nip" value="<?=$da->nip ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Pegawai</label><br>
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" name="nama_depan" class="form-control" value="<?=$da->nama_depan ?>">
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="nama_belakang" class="form-control" value="<?=$da->nama_belakang ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="<?=$da->jabatan ?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" rows="2" class="form-control"><?=$da->keterangan ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?=$da->email ?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <small>Biarkan kosong jika tidak ingin merubah password</small>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Tambah" class="form-control btn btn-primary">
                  </div>
                </div>
              </div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </main>
