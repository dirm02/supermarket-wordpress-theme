<?php get_header() ?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-title page-title-3 image-bg overlay parallax">
  <div class="background-image-holder">
      <img alt="Background Image" class="background-image" src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
              <h3 class="mb0"><?php the_title(); ?></h3>
          </div>
      </div>

  </div>
  <ol class="breadcrumb breadcrumb-2">
      <li>
          <a href="#">Αρχική</a>
      </li>
      <li class="active"><?php the_title(); ?></li>
  </ol>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 text-center">
        <p class="lead">
          <?php the_content() ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; else : ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 <!-- REALLY stop The Loop. -->
<?php endif; ?>

<?php get_footer(); ?>
