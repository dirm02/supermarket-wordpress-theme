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
                          <span class="label number">2</span>
                          <span class="title">ΚΑΛΑΘΙ</span>
                      </div>
                      <div class="function">
                          <div class="widget">
                              <h6 class="title">ΚΑΛΑΘΙ</h6>
                              <hr>
                              <ul class="cart-overview">
                                  <li>
                                      <a href="#">
                                          <img alt="Product" src="<?php echo get_template_directory_uri(); ?>/img/peaches.jpg">
                                          <div class="description">
                                              <span class="product-title">Canvas Backpack</span>
                                              <span class="price number">39.90€</span>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <img alt="Product" src="<?php echo get_template_directory_uri(); ?>/img/peaches.jpg">
                                          <div class="description">
                                              <span class="product-title">Vintage Camera</span>
                                              <span class="price number">249.50€</span>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                              <hr>
                              <div class="cart-controls">
                                  <a class="btn btn-sm btn-filled pull-left" href="#">ΤΑΜΕΙΟ</a>
                                  <div class="list-inline pull-right">
                                      <span class="cart-total">ΣΥΝΟΛΟ: </span>
                                      <span class="number">289.40€</span>
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
