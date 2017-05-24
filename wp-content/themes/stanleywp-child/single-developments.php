<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-property">
        <div class="row">
          <?php $contact = get_post_meta($post->ID, 'contact_developments', true);  
                $basic_features = get_post_meta($post->ID, 'basic_features_developments', true); 
                $basic_image = get_post_meta($post->ID, 'basic_image_developments', true); 
          ?>
          <div class="<?php echo $contact == "" && $basic_features == "" && $basic_image == "" ? 'col-lg-12' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12' ?> ">
            <h2><?php the_title(); ?></h2>
            <br/>
            <p><?php echo the_post_thumbnail('medium', array( 'class' => 'alignleft' )).do_shortcode(get_the_content()); ?></p>
            <br/>
            <?php 
              if (get_post_meta($post->ID, 'visit_link', true) != ""){
            ?>
            <div >
              <a class="basic button" href="<?php echo get_post_meta($post->ID, 'visit_link', true); ?>" target="_blank"> <?php echo get_post_meta($post->ID, 'visit_button', true); ?> </a>
            </div>
            <?php } ?>
            </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style ="<?php echo $contact == "" && $basic_features == "" && $basic_image == "" ? 'display:none;' : 'display:block;' ?> ">
            <?php 
              if (get_post_meta($post->ID, 'contact_developments', true) != ""){
            ?>
            <div class="block_two" style="color:#fff !important">
              <?php echo wpautop(get_post_meta($post->ID, 'contact_developments', true)); ?>
            </div>
            <?php
              }
              if (get_post_meta($post->ID, 'basic_features_developments', true) != ""){
            ?>
            <div class="block_one">
              <?php echo wpautop(get_post_meta($post->ID, 'basic_features_developments', true)); ?>
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
