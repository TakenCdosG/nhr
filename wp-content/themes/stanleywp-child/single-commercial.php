<?php
/**
 * Single Commercial Template
 *
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-property">
        <div class="row">
          <?php 
                $gmaps_sc = get_post_meta($post->ID, 'gmaps_sc', true); 
                $commercial_button = get_post_meta($post->ID, 'commercial_button', true);
          ?>
          <div class="single-paragraph <?php echo $gmaps_sc == "" ? 'col-lg-12' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12' ?> ">
            <h2><?php the_title(); ?></h2>
            <div class="main-image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div style="margin-top:20px;">
              <ul class="single_thumbnails ">
                <div class="carouf">
                  <div class="list_carousel">
                    <ul id="carousel">
                      <?php
                      $attachments = get_post_meta($post->ID, 'property_gallery');
                      // Loop through each attachment ID
                      foreach ( $attachments as $attachment ) :
                        $img_url  = wp_get_attachment_url( $attachment );
                        $img_alt  = get_post_meta( $attachment, '_wp_attachment_image_alt', true );
                        $img_html = wp_get_attachment_image( $attachment, 'medium_custom' ); 
                        if($img_url != ""){
                        ?>
                        <li style="width:100px;">
                          <?php
                          // Display image with lightbox
                          if ( $img_url != "" ) : ?>
                            <a rel="prettyPhoto[Gallery]" href="<?php echo $img_url; ?>" title="<?php echo $img_alt; ?>" class="wpex-lightbox">
                              <?php echo $img_html; ?>
                            </a>
                          <?php
                          // Lightbox is disabled, only show image
                          else : ?>
                            <?php echo $img_html != "" ? $img_html : ""; ?>
                          <?php endif; ?>
                        </li>
                      <?php }
                      endforeach; ?>
                    </ul>
                  </div>
                    <a class="prev" id="carousel_prev" href="#"><span></span></a>
                    <a class="next" id="carousel_next" href="#"><span></span></a>
                </div>
              </ul><!-- thumbnails -->
            </div>
            <?php the_content(); ?>
            <div class="commercial-button"><?php echo $commercial_button == "" ? '' : '<a class="more" href="'.$commercial_button.'">Visit Their Website</a>' ?></div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style ="<?php echo $gmaps_sc == "" ? 'display:none;' : 'display:block;' ?> ">
            <?php
              if (get_post_meta($post->ID, 'gmaps_sc', true) != ""){
                  ?>
                  <div class="block_three">
                      <?php echo do_shortcode(get_post_meta($post->ID, 'gmaps_sc', true)); ?>
                  </div>
              <?php
              }
            ?>
            <?php
              if (get_post_meta($post->ID, 'commercial_links', true) != ""){
                  ?>
                  <div class="block_two basic">
                      <?php echo get_post_meta($post->ID, 'commercial_links', true); ?>
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
