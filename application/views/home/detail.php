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
<div class="gap"></div>
<div class="row">
<aside class="col-sm-4 col-sm-push-8">

<div class="widget categories">
<h3 class="widget-title">Blog Categories</h3>
<div class="row">
<div class="col-sm-6">
  <ul class="arrow">
      <li><a href="#">Fashion</a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Music</a></li>
      <li><a href="#">Reviews</a></li>
      <li><a href="#">News</a></li>
  </ul>
</div>
<div class="col-sm-6">
  <ul class="arrow">
      <li><a href="#">Nature</a></li>
      <li><a href="#">Travel</a></li>
      <li><a href="#">Web Design</a></li>
      <li><a href="#">Tutorial</a></li>
      <li><a href="#">Samples</a></li>
  </ul>
</div>
</div>
</div><!--/.categories-->
<div class="widget tags">
<h3 class="widget-title">Post Tags</h3>
<ul class="tag-cloud">
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Fashion</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Video</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">WordPress</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Plugins</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Downloads</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Freebies</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Envato</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Tutorial</a></li>
<li><a class="btn btn-xs btn-primary btn-outlined" href="#">Update</a></li>
</ul>
</div><!--/.tags-->

</aside>
<div class="col-sm-8 col-sm-pull-4">
<div class="blog">
<div class="blog-item">
<div class="blog-content">
  <?php if($info){ ?>
  <h3 class="main-title"><?= $info['judul'] ?></h3>
  <div class="entry-meta">
      <span><i class="fa fa-user"></i> <a href="#"> <?= $user['nama_depan']." ".$user['nama_belakang'] ?></a></span>
      <span><i class="fa fa-clock-o"></i> <?= $info['updated_at'] ?></span>
      <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
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
