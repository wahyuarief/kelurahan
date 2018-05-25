
    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<span class="home-icon pe-7s-gleam bounce-in"></span>
                                    <h2 class="boxed animation animated-item-1 fade-down">KELURAHAN PONDOK BAMBU</h2>
                                    <p class="boxed animation animated-item-2 fade-up">Our expertise will guide you to success. Without Fail.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="about-us" class="white">
        	<div class="container">
	            <div class="gap"></div>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="center gap fade-down section-heading">
	                        <h2 class="main-title">Sedikit Tentang Kami</h2>
	                        <hr>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-10 col-md-offset-1 fade-up">
	                    <p>Pondok Bambu adalah sebuah kelurahan di kecamatan Duren Sawit Jakarta Timur. Kelurahan ini berbatasan dengan Kelurahan Klender di sebelah utara, Kelurahan Cipinang Muara di sebelah barat, Kelurahan Duren Sawit di sebelah timur dan Kelurahan Cipinang Melayu di sebelah selatan.</p>
	                </div>
	                <div class="col-md-4 fade-up">

	                </div>
	            </div>
               <div class="gap"></div>
            </div>
        </section>

        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">246000</span></h1>
                            <h3>HOURS SAVED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">16875</span></h1>
                            <h3>FRESH IDEAS</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">99999999</span></h1>
                            <h3>HUGE PROFIT</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                            <h1><span class="counter">54875</span></h1>
                            <h3>THINGS IN BOXES</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>

        <section id="blog" class="white">
            <div class="container">
                <div class="center gap fade-down section-heading">
               		<div class="gap"></div>
                    <h2 class="main-title">Informasi Terbaru</h2>
                    <hr>
                </div>
                <div class="gap"></div>
                <div class="rows">
                  <?php if (isset($info)) {
                    foreach ($info as $row) {
                      $user = $this->crud_model->_read_where('pegawai', ['nip'=>$row['peg_id']])->row_array(); ?>
                      <div class="col-md-4">
                      <div class="post">
                        <div class="content">
                          <h2 class="post-title"><?= $row['judul'] ?></h2>
                          <div class="author">
                              <i class="fa fa-user"></i> <b><?= $user['nama_depan']." ".$user['nama_belakang'] ?></b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20"><?= $row['updated_at'] ?></time>
                          </div>
                          <div>
                              <?= strip_tags(substr($row['konten'],0,120)) ?>
                          </div>
                          <div class="read-more-wrapper">
                              <a href="<?= base_url('informasi/detail/').$row['slug'] ?>" class="btn btn-outlined btn-primary">Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }} ?>
                </div>
            </div>
   		</section>
			<div id="mapwrapper">
				<div id="map"></div>
			</div>
    </div>
