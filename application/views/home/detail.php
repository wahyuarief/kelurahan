<section id="single-page-slider" class="no-margin">
<div class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="item active">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="center gap fade-down section-heading">
                <h2 class="main-title"><?= $info['judul'] ?></h2>
            </div>
        </div>
    </div>
</div>
</div><!--/.item-->
</div><!--/.carousel-inner-->
</div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">
<section id="blog" class="white">
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
<div class="blog">
<div class="blog-item">
<div class="blog-content">
  <?php if($info){ ?>
  <h3 class="main-title"><?= $info['judul'] ?></h3>
  <div class="entry-meta">
      <span><i class="fa fa-user"></i> <a href="#"> <?= $user['nama_depan']." ".$user['nama_belakang'] ?></a></span>
      <span><i class="fa fa-clock-o"></i> <?= $info['updated_at'] ?></span>
  </div>
  <hr>
  <p class="lead">
    <?= $info['konten'] ?>
  </p>
<?php } else { echo "Informasi Tidak Ditemukan";} ?>
</div>
</div>
</div>
</div><!--/.col-md-8-->
</div><!--/.row-->
</div>
</section><!--/#blog-->
</div>
