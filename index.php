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
              <img alt="logo" class="image-xxs" src="img/logo-dark.png">
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
              <li><a href="#">Η εταιρία</a></li>
              <li><a href="#">Νέα</a></li>
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
  	</div>

    <?php wp_footer(); ?>
  </body>
</html>
