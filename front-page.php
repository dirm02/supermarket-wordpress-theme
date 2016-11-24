<?php get_header() ?>

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
<section id="page2" class="pb8">
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
            <?php
              $meta_query = WC()->query->get_meta_query();
              $meta_query[] = array(
                  'key'   => '_featured',
                  'value' => 'yes'
              );
          		$args = array(
          			'post_type' => 'product',
          			'posts_per_page' => 6,
                'meta_query'  =>  $meta_query
          			);
          		$loop = new WP_Query( $args );
              $counter = 0;
              $num_of_posts = $loop->post_count;
          		if ( $loop->have_posts() ) {
          			while ( $loop->have_posts() ) : $loop->the_post();
                  global $woocommerce;
                  global $product;
                  $currency = get_woocommerce_currency_symbol();
                  $price = get_post_meta( get_the_ID(), '_regular_price', true);
                  $sale = get_post_meta( get_the_ID(), '_sale_price', true);
            ?>
            <div class="col-md-4 offer-product">
              <div class="image-tile outer-title text-center">
                <div class="title mb16">
                  <a rel="nofollow" href="/terzis.com.gr/?add-to-cart=29" data-quantity="1" data-product_id="29" data-product_sku="300-789" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><i class="icon ti-shopping-cart pull-right"></i></a>
                  <!-- <i class="icon ti-shopping-cart pull-right"></i> -->
                  <h5 class="mb0"><?php the_title() ?></h5>
                  <span>SKU:&nbsp;</span><span><?php echo $product->get_sku(); ?></span>
                </div>
                <a href="#">
                  <!-- <span class="label">20%</span> -->
                  <img class="product-thumb" alt="Pic" src="<?php the_post_thumbnail_url( $medium ); ?>">
                </a>
                <span class="display-block old-price"><?php echo $price; echo $currency; ?></span>
                <span class="display-block mb16"><?php echo $sale; echo $currency; ?></span>
                <!-- <?php echo do_shortcode('[add_to_cart id="29"]') ?> -->
              </div>
            </div>
            <?php
              // on every third result, echo a list
              if(++$counter % 3 === 0 && $counter !== $num_of_posts) {
                  echo "</li><li>";
              }
              endwhile;
        		}
        		wp_reset_postdata();
          	?>
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
    <?php
      $args = array(
             'taxonomy'     => 'product_cat',
             'hide_empty'   => false
      );
     $categories = get_categories( $args );
     foreach ($categories as $cat) {
      if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        // get the thumbnail id using the queried category term_id
        $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
        // get the image URL
        $image = wp_get_attachment_url( $thumbnail_id );

        if ($image) {
    ?>
    <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Προϊόντα">
        <div class="image-tile inner-title hover-reveal text-center">
            <a href="#">
                <img alt="Pic" src="<?php echo $image; ?>">
                <div class="title">
                  <h4 class="mb0"><?php echo $cat->name ?></h4>
                  <span><?php echo $cat->description  ?></span>
                </div>
            </a>
        </div>
    </div>
    <?php }}} ?>

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
        <div class="bg-blue">
          <p><i class="ti ti-location-pin">&nbsp;</i>Ρίγα Φεραίου 59, Πύργος <a href="https://goo.gl/maps/5cTGAHqKPus" target="_blank"><span class="pull-right"><i class="ti ti-map-alt"></i></span></a></p>
        </div>
        <div class="map-canvas" data-address="Ρίγα Φεραίου 59, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
      </div>
      <div class="col-sm-6 pb16">
        <div class="bg-blue">
          <p><i class="ti ti-location-pin">&nbsp;</i>Γερμανού 39, Πύργος <a href="https://goo.gl/maps/71ikYwE2Rot" target="_blank"><span class="pull-right"><i class="ti ti-map-alt"></i></span></a></p>
        </div>
        <div class="map-canvas" data-address="Γερμανού 39, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
      </div>
      <div class="col-sm-6 pb16">
        <div class="bg-blue">
          <p><i class="ti ti-location-pin">&nbsp;</i>Μανωλοπούλου 42, Πύργος <a href="https://goo.gl/maps/TGA3aDTqw772" target="_blank"><span class="pull-right"><i class="ti ti-map-alt"></i></span></a></p>
        </div>
        <div class="map-canvas" data-address="Μανωλοπούλου 42, Πύργος" data-map-zoom="16" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-maps-api-key="AIzaSyBLYw1AL7CbAPeCJ9fzrEdFw-ST3NGvvRc"></div>
      </div>
      <div class="col-sm-6 pb16">
        <div class="bg-blue">
          <p><i class="ti ti-location-pin">&nbsp;</i>2o' χλμ. Ε.Ο. Πύργου Ολυμπίας   <a href="https://goo.gl/maps/BFx6dc1wg8y" target="_blank"><span class="pull-right"><i class="ti ti-map-alt"></i></span></a></p>
        </div>
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
            <a href="<?php echo get_permalink(); ?>">
              <div class="background-image-holder">
                <img alt="image" class="background-image" src="<?php the_post_thumbnail_url( $large ); ?>">
              </div>
            </a>
          </div>
          <div class="tile-right bg-secondary">
            <div class="description">
              <h4 class="mb8 blue"><?php the_title() ?></h4>
              <h6 class="grey"><?php echo get_the_date(); ?></h6>
              <p>
                  <?php echo the_excerpt();  ?>
              </p>
              <a class="more" href="<?php echo get_permalink(); ?>">Περισσότερα</a>
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

<?php get_footer(); ?>
