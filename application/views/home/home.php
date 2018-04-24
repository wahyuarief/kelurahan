
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
                <div class="row fade-up">
                    <div class="col-md-6">
                      	<div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="<?= base_url('assets/') ?>images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="<?= base_url('assets/') ?>images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="<?= base_url('assets/') ?>images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="<?= base_url('assets/') ?>images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
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

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Hubungi Kami</h2>
                        <hr>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Informasi Kontak</h3>
                            <p><span class="icon icon-home"></span>Pondok Bambu, Jakarta Timur<br/>
                                <span class="icon icon-phone"></span>+36 65984 405<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>
                                <span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
                                <span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                                <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
                            </p>
                        </div><!-- col -->

                        <div class="col-md-8 fade-up">
                            <h3>Kirim Pesan</h3>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
            </section>
        </div>

    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Global Coverage</h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="<?= base_url('assets/') ?>images/portfolio/folio01.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="<?= base_url('assets/') ?>images/portfolio/folio02.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Come See Us</h4>
                        <address>
                            <strong>Ace Towers</strong><br>
                            New York Ave,<br>
                            New York, 215648<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                        </address>
                    </div> <!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->
