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

      <!-- Slider -->
  		<section id="page1" class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
        <ul class="slides">
          <li class="overlay image-bg">
            <div class="background-image-holder">
              <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
            </div>
            <div class="container v-align-transform text-center">
              <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3">
                  <!-- <h1 class="mb40 mb-xs-16 large">Super Market Τερζής</h1>
                  <h6 class="uppercase mb16">A complete block-based solution</h6>
                  <p class="lead mb40">
                      Build beautiful, contemporary sites in just moments
                      with Foundry and Variant Page Builder.
                  </p> -->
                  <a href="#page2"><div class="icon faa-float animated"><i class="fa fa-angle-double-down"></i></div></a>
                </div>
              </div>
            </div>
          </li>
          <!-- <li class="overlay image-bg">
            <div class="background-image-holder">
              <img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
            </div>
            <div class="container v-align-transform text-center">
              <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3">
                  <a href="#page2"><div class="icon faa-float animated"><i class="fa fa-angle-double-down"></i></div></a>
                </div>
              </div>
            </div>
          </li> -->
        </ul>

	    </section>

      <!-- Προσφορές -->
      <section id="page2">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 mb48 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/prosfores.png" alt="Προσφορές" />
            </div>
          </div>

          <div class="row">

            <div class="slider-offer-products">
              <ul class="slides">

                <li>
                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="mb0">Ροδάκινα Νάουσας</h5>
                        <span>Μονόσειρο Νο 18-20</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/peaches.jpg">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="uppercase mb0">Gliss</h5>
                        <span>Shampoo 400ml</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/shampoo.jpg">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="uppercase mb0">Agrino</h5>
                        <span>Ρύζι Μπασμάτι</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/basmati.jpg">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="mb0">Ροδάκινα Νάουσας</h5>
                        <span>Μονόσειρο Νο 18-20</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/peaches.jpg">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="uppercase mb0">Gliss</h5>
                        <span>Shampoo 400ml</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/shampoo.jpg">
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-4 offer-product">
                    <div class="image-tile outer-title text-center">
                      <div class="title mb16">
                        <i class="icon ti-shopping-cart pull-right"></i>
                        <h5 class="uppercase mb0">Agrino</h5>
                        <span>Ρύζι Μπασμάτι</span>
                      </div>
                      <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/img/basmati.jpg">
                    </div>
                  </div>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </section>

      <!-- Προϊόντα -->
      <section id="page3" class="projects pt48 bg-secondary">
        <div class="container">

          <div class="row pb24">
            <div class="col-sm-12 text-center">
              <h2 class="blue">Προϊόντα</h2>
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

      <!-- Τοποθεσία -->
      <section id="page4">
        <div class="container">
          <div class="row pb24">
            <div class="col-sm-12 text-center">
              <h2 class="blue">Τοποθεσία</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 pb16">
              <div class="map-canvas" data-address="Ρίγα Φεραίου 59, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
            </div>
            <div class="col-sm-6 pb16">
              <div class="map-canvas" data-address="Γερμανού 39, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
            </div>
            <div class="col-sm-6 pb16">
              <div class="map-canvas" data-address="Μανωλοπούλου 42, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
            </div>
            <div class="col-sm-6 pb16">
              <div class="map-canvas" data-address="2' ΕΟ Ολυμπίας Πύργου" data-map-zoom="13" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Η Εταιρία -->
      <section id="page5" class="bg-dark bg-blue">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3>Η Εταιρία</h3>
            </div>
          </div>
          <div class="row mb64 mb-xs-24">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
              <p>
                Η εταιρεία ΤΕΡΖΗΣ Α.Ε.Β.Ε. δραστηριοποιείται στο χώρο εμπορίας τροφίμων από το 1998,
                και αποτελεί μέλος του Ομίλου Terzis Group.
                Διαθέτει 3 καταστήματα λιανικής πώλησης και ένα κατάστημα χονδρικής Cash &amp; Carry
                και αποτελεί τη μεγαλύτερη αλυσίδα σούπερ μάρκετ στο Νομό Ηλείας.
              </p>
              <p>
                <strong class="dark-blue">Μειώνουμε σταθερά τις τιμές.</strong>
              </p>
              <p>
                Στα Σούπερ Μάρκετ Τερζής, σας παρέχουμε καθημερινά ποιοτικά προϊόντα σε ανταγωνιστικές τιμές.
                Στηρίζουμε τα Ελληνικά Προϊόντα με ιδιαίτερη προτεραιότητα στους τοπικούς παραγωγούς.
                Σας παρέχουμε προσφορές, για τις οποίες μπορείτε να ενημερώνεστε από το φυλλάδιο μας. Επίσης σας προσφέρουμε
                δωροεπιταγές και τη δυνατότητα αποστολής στο σπίτι.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 text-center">
              <h4 class="mb32 mb-xs-40 dark-blue">Συνεργαζόμενες εταιρίες</h4>
            </div>
	        </div>

	        <div class="row">
            <div class="logo-carousel">
              <ul class="slides">
                <li>
                  <a href="#">
                    <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/fage.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/ion.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/papadopoulou.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/green-cola.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/vitam.png">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Νέα -->
      <section id="page6">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="blue pb24">Νέα</h3>
            </div>
          </div>
          <div class="row">

            <div class="col-md-10 col-md-offset-1">

              <?php

              // The Query
              $the_query = new WP_Query(  array( 'post_type' => 'post', 'orderby' => 'date', 'order'   => 'DESC', 'posts_per_page'=> 2 )  );

              // The Loop
              if ( $the_query->have_posts() ) {
              	while ( $the_query->have_posts() ) {
              		$the_query->the_post();
              ?>
              <div class="horizontal-tile">
                <div class="tile-left">
                  <a href="#">
                    <div class="background-image-holder">
                      <img alt="image" class="background-image" src="<?php the_post_thumbnail_url( $large ); ?> ">
                    </div>
                  </a>
                </div>
                <div class="tile-right bg-secondary">
                  <div class="description">
                    <h4 class="mb8 blue"><?php the_title() ?></h4>
                    <h6><?php echo get_the_date(); ?></h6>
                    <p>
                        <?php echo the_excerpt();  ?>
                    </p>
                    <a href="#">περισσότερα</a>
                  </div>
                </div>
              </div>
              <?php
              	}
              	/* Restore original Post Data */
              	wp_reset_postdata();
              } else {
              	// no posts found
              }
              ?>


            </div>

          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer id="page7" class="footer-1 bg-dark">
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

    <script>
      $( ".mobile-toggle" ).click(function() {
        if ( $( ".nav-open" ).length ) {
            $('.ti-angle-up').addClass('ti-angle-down').removeClass('ti-angle-up');
        } else {
            $('.ti-angle-down').addClass('ti-angle-up').removeClass('ti-angle-down');
        }
      });
    </script>

  </body>
</html>
