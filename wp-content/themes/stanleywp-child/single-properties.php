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
          <div class="<?php echo $apply_now == "" && $property_details == "" && $links == "" ? 'col-lg-12' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12' ?> ">
            <h2><?php the_title(); ?></h2>
            <br/>
            <?php the_content(); ?>
            <br/>
            <div class="row">
              <?php if(get_post_meta($post->ID, 'features', true) != ""){?>
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
              <?php }
              if(get_post_meta($post->ID, 'property_information', true) != ""){?>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
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
              </div>
              <?php } ?>
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
            ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div><!-- end of #content -->

<?php get_footer(); ?>
