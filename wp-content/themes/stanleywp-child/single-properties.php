<?php
/**
 * Single Properties Template
 *
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-property">
        <div class="row">
          <?php $apply_now = get_post_meta($post->ID, 'apply_now', true);  
                $property_details = get_post_meta($post->ID, 'property_details', true); 
                $links = get_post_meta($post->ID, 'links', true); 
          ?>
          <div class="single-paragraph <?php echo $apply_now == "" && $property_details == "" && $links == "" ? 'col-lg-12' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12' ?> ">
            <h2><?php the_title(); ?></h2>
            <br/>
            <?php the_content(); ?>
            <br/>
            <div class="row features">
              <?php if(get_post_meta($post->ID, 'features', true) != ""){?>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span><strong>Features</strong></span>
                <ul>
                  <?php $feature = get_post_meta($post->ID, 'features'); 
                    $valor = "";
                    foreach ($feature as $valor) {
                      echo '<li>'.$valor.'</li>';
                    }
                  ?>
                </ul>
              </div>
              <?php }
              if(get_post_meta($post->ID, 'services', true) != ""){?>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
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
              <?php } ?>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                <?php if(get_post_meta($post->ID, 'property_information', true) != ""){?>
                <span><strong>Property Information</strong></span>
                <?php echo get_post_meta($post->ID, 'property_information', true); ?>
                <br/>
                <?php }
              if(get_post_meta($post->ID, 'parking', true) != ""){?>
                <span><strong>Parking</strong></span>
                <?php echo get_post_meta($post->ID, 'parking', true); ?>
                <br/>
                <?php }
              if(get_post_meta($post->ID, 'outdoor_space', true) != ""){?>
                <span><strong>Outdoor Space</strong></span>
                <?php echo get_post_meta($post->ID, 'outdoor_space', true); ?>
              <?php } ?>
            </div>
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
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style ="<?php echo $apply_now == "" && $property_details == "" && $links == "" ? 'display:none;' : 'display:block;' ?> ">
            <?php 
              if (get_post_meta($post->ID, 'apply_now_button', true) != ""){
            ?>
            <div class="button">
              <?php $href = wp_get_attachment_url(get_post_meta($post->ID, 'apply_now', true)); 
              ?>
              <a href="<?php echo $href != "" ? $href : "#" ?>" target="<?php echo $href != "" ? "_blank" : "_self" ?>">
                <?php echo get_post_meta($post->ID, 'apply_now_button', true); ?>
              </a>
            </div>
            <?php 
              }
              if (get_post_meta($post->ID, 'property_details', true) != ""){
            ?>
            <div class="block_one">
              <?php echo get_post_meta($post->ID, 'property_details', true); ?>
            </div>
            <?php
              }
              if (get_post_meta($post->ID, 'links', true) != ""){
            ?>
            <div class="block_two">
              <?php echo get_post_meta($post->ID, 'links', true); ?>
            </div>
            <?php
              }
                if (get_post_meta($post->ID, 'gmaps_sc', true) != ""){
                    ?>
                    <div class="block_three">
                        <?php echo do_shortcode(get_post_meta($post->ID, 'gmaps_sc', true)); ?>
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
