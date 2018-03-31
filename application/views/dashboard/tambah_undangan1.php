<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Tambah Undangan</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Tambah Undangan</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <textarea name="isi" rows="12" class="form-control textboxio"></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Undangan</label>
                    <input type="text" name="noundangan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nomor Registrasi</label>
                    <input type="text" name="noregistrasi" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Tambah" class="form-control btn btn-primary">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
