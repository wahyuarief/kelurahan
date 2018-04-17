<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i> Edit Laporan</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Laporan</a></li>
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
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?=$da->id?>">
                    <input type="text" name="nama" class="form-control" placeholder="Hal" value="<?=$da->nama?>">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" rows="12" class="form-control textboxio"><?=$da->isi?></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Laporan</label>
                    <input type="text" name="nosurat" class="form-control" require value="<?=$da->no_laporan?>">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategoriid" class="form-control">
                      <?php foreach($listKategori as $d){?>
                      <?php if($da->kat_id == $d->id){?>
                        <option value="<?=$da->kat_id?>" selected=""><?=$d->nama?></option>
                      <?php }else{ ?>
                        <option value="<?=$d->id?>"><?=$d->nama?></option>
                        <?php }} ?>
                    </select>
                  </div>
                  <?php } ?>
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
