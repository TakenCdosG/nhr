<?php
/**
 * Single Person Template
 *
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-person">
        <div class="row">
          
          <div class="single-paragraph col-md-4 ">
            <div class="main-image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
          </div>
          <div class="col-md-8">
            <div class="person-content">
              <h2>
                <span style="text-transform:uppercase;"><?php echo get_post_meta($post->ID, 'person_name', true);?></span>
                <br>
                <?php echo get_post_meta($post->ID, 'person_title', true);  ?>
              </h2>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- end of #content -->

<?php get_footer(); ?>
