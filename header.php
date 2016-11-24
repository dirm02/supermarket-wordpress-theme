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

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="nav-container">
      <a id="top"></a>
      <nav class="fixed">
        <div class="nav-bar text-center">
          <div class="module">
            <a href="<?php echo get_site_url(); ?>">
              <img class="logo logo-light" alt="<?php echo bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
              <img class="logo logo-dark" alt="<?php echo bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
          </div>

          <div class="module widget-handle mobile-toggle right visible-lg visible-md visible-sm visible-xs active toggle-widget-handle">
            <i class="ti-angle-down"></i>
          </div>

              <div class="module-group right">

                <div class="module text-center">
                    <ul class="menu">
                      <li>
                          <a href="#page1">ΑΡΧΙΚΗ</a>
                      </li>
                      <li>
                          <a href="#page2">ΠΡΟΣΦΟΡΕΣ</a>
                      </li>
                      <li>
                          <a href="#page3">ΠΡΟΪΟΝΤΑ</a>
                      </li>
                      <li>
                          <a href="#page4">ΤΟΠΟΘΕΣΙΑ</a>
                      </li>
                      <li>
                          <a href="#page5">Η ΕΤΑΙΡΙΑ</a>
                      </li>
                      <li>
                          <a href="#page6">ΝΕΑ</a>
                      </li>
                      <li>
                          <a href="#page7">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                      </li>
                    </ul>
                </div>

                  <div class="module widget-handle search-widget-handle left">
                      <div class="search">
                          <i class="ti-search"></i>
                          <span class="title">ΑΝΑΖΗΤΗΣΗ</span>
                      </div>
                      <div class="function">
                          <form class="search-form">
                              <input placeholder="ΑΝΑΖΗΤΗΣΗ" type="text">
                          </form>
                      </div>
                  </div>
                  <div class="module widget-handle cart-widget-handle left">
                      <div class="cart">
                          <i class="ti-bag"></i>
                          <span class="label number"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                          <span class="title">ΚΑΛΑΘΙ</span>
                      </div>
                      <div class="function">
                          <div class="widget">
                              <h6 class="title">ΚΑΛΑΘΙ</h6>
                              <hr>
                              <ul class="cart-overview">
                                <?php
                                  global $woocommerce;
                                  $items = $woocommerce->cart->get_cart();
                                  foreach($items as $item => $values) {
                                    $product = $values['data']->post;
                                    $quantity = $values['quantity'];
                                    $price = get_post_meta($values['product_id'] , '_price', true);
                                    $currency = get_woocommerce_currency_symbol();
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ), 'medium' );
                                  ?>
                                  <li>
                                      <a href="#">
                                          <img alt="Product" src="<?php echo $image[0]; ?>">
                                          <div class="description">
                                              <span class="product-title"><?php echo $product->post_title; ?> x <?php echo $quantity ?></span>
                                              <span class="price number"><?php echo $price; echo $currency; ?></span>
                                          </div>
                                      </a>
                                  </li>
                                  <?php } ?>
                              </ul>
                              <hr>
                              <div class="cart-controls">
                                  <a class="btn btn-sm btn-filled pull-left" href="<?php echo wc_get_cart_url(); ?>">ΤΑΜΕΙΟ</a>
                                  <div class="list-inline pull-right">
                                      <span class="cart-total">ΣΥΝΟΛΟ: </span>
                                      <span class="number"><?php echo WC()->cart->get_cart_total(); ?></span>
                                  </div>
                              </div>
                          </div>
                          <!--end of widget-->
                      </div>
                  </div>

              </div>
              <!--end of module group-->
          </div>
      </nav>
  </div>

  <div class="main-container">
