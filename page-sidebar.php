/**
 * Template Name: Page Sidebar
 */

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
      <div class="col-md-7 col-md-offset-1 col-sm-8">
        <?php if ( has_post_thumbnail() ) { ?>
        <img class="mb24" alt="Post Image" src="<?php the_post_thumbnail_url( $large ); ?>">
        <?php } ?>
        <div class="post-title">
            <h4 class="inline-block"><?php the_title() ?></h4>
        </div>
        <hr>
        <?php the_content(); ?>
      </div>
      <div class="col-md-3 col-sm-4 col-md-offset-1">
        <!-- Facebook Widget -->
        <div class="fb-page" data-href="https://www.facebook.com/TerzisSupermarketGR/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/TerzisSupermarketGR/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/TerzisSupermarketGR/">ΤΕΡΖΗΣ Σούπερ-Μάρκετ</a>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
