<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i> Tambah Pegawai</h1>
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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Judul Website</label>
                    <input type="text" name="judul" class="form-control" value="<?=$pengaturan['judul']?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi Website</label>
                    <textarea name="deskripsi" rows="2" class="form-control"><?=$pengaturan['deskripsi']?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Logo Website</label>
                    <input type="file" name="logo" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Simpan" class="form-control btn btn-primary">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
