<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i> Surat Masuk</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Surat Masuk</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="table-responsive">
              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>
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
                  <?php foreach ($surat_masuk as $row) { ?>
                    <tr>
                      <td><?php echo $row['no_surat'] ?></td>
                      <td><?php echo $row['no_registrasi'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['created_at'] ?></td>
                      <td>
                      <div class="btn-group">
                        <a href="<?=base_url('surat/edit/').$row['id']?>" class="form-control btn btn-warning">Edit</a>
                        <a href="<?=base_url('surat/delete/').$row['id']?>" class="form-control btn btn-danger">Delete</a>
                      </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
