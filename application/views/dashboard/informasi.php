<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-files-o"></i> Informasi</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Informasi</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="table-responsive">
              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Sukses!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>
              <table class="table table-striped" id="TableListPegawai">
                <thead>
                  <tr>
                    <th width="50px">No</th>
                    <th>Judul</th>
                    <th width="50px">Pembuat</th>
                    <th width="50px">Diperbaharui</th>
                    <th width="50px">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;foreach ($informasi as $row) {
                    $user = $this->crud_model->_read_where('pegawai', ['nip'=>$row['peg_id']])->row_array(); ?>
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $row['judul'] ?></td>
                      <td><?php echo $user['nama_depan']." ".$user['nama_belakang'] ?></td>
                      <td><?php echo $row['created_at'] ?></td>
                      <td>
                      <div class="btn-group">
                        <a href="<?=base_url('informasi/detail/').$row['slug']?>" class="form-control btn btn-sm btn-info">Lihat</a>
                        <a href="<?=base_url('informasi/edit/').$row['id']?>" class="form-control btn btn-sm btn-warning">Edit</a>
                        <a href="<?=base_url('informasi/hapus/').$row['id']?>" class="form-control btn btn-sm btn-danger">Hapus</a>
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
