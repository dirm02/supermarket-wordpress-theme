<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php
    if (is_front_page()) {
      bloginfo('name');
      echo ' | ';
      bloginfo('description');
    } else {
      bloginfo('name');
      wp_title();
    }
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>

		<div class="nav-container">
	    <nav>
        <div class="nav-bar text-center">
          <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
            <a href="#">
              <img alt="logo" class="image-xs" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
          </div>

          <div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
            <ul class="menu inline-block pull-right">
              <li><a href="#">Αρχική</a></li>
              <li><a href="#">Προσφορές</a></li>
              <li><a href="#">Προϊόντα</a></li>
              <li><a href="#">Καταστήματα</a></li>
            </ul>
          </div>

          <div class="col-sm-12 col-md-5 pb-xs-24">
            <ul class="menu">
              <li><a href="#">Η Εταιρία</a></li>
              <li><a href="#">Τελευταία Νέα</a></li>
              <li><a href="#">Επικοινωνία</a></li>
            </ul>
          </div>
        </div>

        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
          <i class="ti-menu"></i>
        </div>
	    </nav>
		</div>

  	<div class="main-container">

      <!-- Slider -->
  		<section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
        <ul class="slides">
          <li class="overlay image-bg">
            <div class="background-image-holder">
              <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
            </div>
          </li>
          <li class="overlay image-bg">
            <div class="background-image-holder">
              <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
            </div>
          </li>
        </ul>
	    </section>

      <!-- Προσφορές -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 mb48 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/prosfores.png" alt="Προσφορές" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="image-tile outer-title text-center">
                <div class="title mb16">
                  <i class="icon ti-shopping-cart pull-right"></i>
                  <h5 class="mb0">Ροδάκινα Νάουσας</h5>
                  <span>Μονόσειρο Νο 18-20</span>
                </div>
                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/peaches.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="image-tile outer-title text-center">
                <div class="title mb16">
                  <i class="icon ti-shopping-cart pull-right"></i>
                  <h5 class="uppercase mb0">Gliss</h5>
                  <span>Shampoo 400ml</span>
                </div>
                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/shampoo.jpg">
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="image-tile outer-title text-center">
                <div class="title mb16">
                  <i class="icon ti-shopping-cart pull-right"></i>
                  <h5 class="uppercase mb0">Agrino</h5>
                  <span>Ρύζι Μπασμάτι</span>
                </div>
                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/basmati.jpg">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="projects pt48">
        <div class="container">
          <div class="row pb24">
            <div class="col-sm-12 text-center">
              <h2>Προϊόντα</h2>
            </div>
          </div>

          <div class="row masonry-loader">
            <div class="col-sm-12 text-center">
              <div class="spinner"></div>
            </div>
          </div>

          <div class="row masonry masonryFlyIn">
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/bath.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/cheeses.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/breakfast.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/papper.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/oliveoil.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/spaggetti.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/vegetables.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/olives.jpg">
                        <div class="title">
                          <h4 class="mb0">Κατηγορία</h4>
                          <span>Σύντομη περιγραφή</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
      </section>

      <footer class="footer-1 bg-dark">
				<div class="container">
					<div class="row">

            <div class="col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="title">ΤΟΠΟΘΕΣΙΑ</h6>
								<hr>
								<ul class="link-list recent-posts">
									<li>
										<strong>Υποκατάστημα 1:</strong>
										<span class="date">Ρήγα Φεραίου 59,
											<span class="number">Πύργος Ηλείας</span>
										</span>
									</li>
									<li>
										<strong>Υποκατάστημα 2:</strong>
										<span class="date">Γερμανού 39,
											<span class="number">Πύργος Ηλείας</span>
										</span>
									</li>
									<li>
										<strong>Υποκατάστημα 3:</strong>
										<span class="date">Μανωλοπούλου 42,
											<span class="number">Πύργος Ηλείας</span>
										</span>
									</li>
                  <li>
										<strong>Cash &amp; Carry:</strong>
										<span class="date">2o' χλμ. Ε.Ο. Πύργου Ολυμπίας
											<span class="number">&nbsp;</span>
										</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="title">ΣΧΕΤΙΚΑ</h6>
								<hr>
								<ul class="link-list recent-posts">
									<li>
										<a href="#">H Ιστορία</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
									<li>
										<a href="#">Η Εταιρία</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
									<li>
										<a href="#">Η Ομάδα</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="title">ΥΠΗΡΕΣΙΕΣ</h6>
								<hr>
                <ul class="link-list recent-posts">
									<li>
										<a href="#">Παράδοση</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
									<li>
										<a href="#">Πληρωμές</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
									<li>
										<a href="#">Κάρτα Plus</a>
										<span class="date">&nbsp;
											<span class="number">&nbsp;</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="title">ΕΠΙΚΟΙΝΩΝΙΑ</h6>
								<hr>
                <ul class="link-list recent-posts">
									<li>
										<strong>Κεντρικά</strong>
										<span class="date">Τηλ:
											<span class="number">26210 31901</span>
										</span>
									</li>
									<li>
										<strong>Email:</strong>
										<span class="date">iterzis@yahoo.gr
											<span class="number">&nbsp;</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<span class="sub"><?php echo date("Y"); ?> © <?php echo get_bloginfo("name"); ?> | Developed by <a href="http://webartworks.gr/">Web Artworks</a></span>
						</div>
						<div class="col-sm-6 text-right">
							<ul class="list-inline social-list">
								<li>
									<a href="#">
										<i class="ti-twitter-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ti-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ti-dribbble"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ti-vimeo-alt"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
			</footer>

  	</div>

    <?php wp_footer(); ?>
  </body>
</html>
