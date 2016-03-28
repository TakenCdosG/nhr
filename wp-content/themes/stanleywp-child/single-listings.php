<?php
/**
 * Single Listings Template
 *
 *
 * @file           single.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-property">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2><?php the_title(); ?></h2>
            <br/>
            <?php the_content(); ?>
            <br/>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span><strong>Features</strong></span>
                <ul style="list-style-type: disc; padding:0 15px;">
                  <?php $feature = get_post_meta($post->ID, 'features'); 
                    $valor = "";
                    foreach ($feature as $valor) {
                      echo '<li>'.$valor.'</li>';
                    }
                  ?>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span><strong>Services</strong></span>
                <ul>
                  <?php $service = get_post_meta($post->ID, 'services'); 
                    $valor = "";
                    foreach ($service as $valor) {
                      echo '<li>'.$valor.'</li>';
                    }
                  ?>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span><strong>Property Information</strong></span>
                <?php echo get_post_meta($post->ID, 'property_information', true); ?>
                <br/>
                <span><strong>Parking</strong></span>
                <?php echo get_post_meta($post->ID, 'parking', true); ?>
                <br/>
                <span><strong>Outdoor Space</strong></span>
                <?php echo get_post_meta($post->ID, 'outdoor_space', true); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="button">
              <?php $href = wp_get_attachment_url(get_post_meta($post->ID, 'apply_now', true)); 
              ?>
              <a href="<?php echo $href != "" ? $href : "#" ?>" target="<?php echo $href != "" ? "_blank" : "_self" ?>">
                <?php echo get_post_meta($post->ID, 'apply_now_button', true); ?>
              </a>
            </div>
            <div class="block_one">
              <?php echo get_post_meta($post->ID, 'property_details', true); ?>
            </div>
            <?php 
              if (get_post_meta($post->ID, 'links', true) != ""){
            ?>
            <div class="block_two">
              <?php echo get_post_meta($post->ID, 'links', true); ?>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- end of #content -->

<?php get_footer(); ?>
