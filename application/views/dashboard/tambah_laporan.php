<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i> Tambah Laporan</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Tambah Laporan</a></li>
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
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Hal" value="<?=set_value('nama')?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" rows="12" class="form-control textboxio"><?=set_value('isi')?></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" name="nosurat" class="form-control" require value="<?=set_value('nosurat')?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Surat</label>
                    <input type="date" name="tglsurat" class="form-control" require value="<?=set_value('tglsurat')?>">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategoriid" class="form-control">
                      <option></option>
                      <?php foreach($listKategori as $d){?>
                      <option value="<?=$d->id?>"><?=$d->nama?></option>
                      <?php } ?>
                    </select>
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
