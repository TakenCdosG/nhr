<?php
/**
 * Template Name: Basic Page
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container single-property">
        <div class="row">
          <?php $contact = get_post_meta($post->ID, 'contact', true);  
                $basic_features = get_post_meta($post->ID, 'basic_features', true); 
                $basic_image = get_post_meta($post->ID, 'basic_image', true); 
          ?>
          <div class="<?php echo $contact == "" && $basic_features == "" && $basic_image == "" ? 'col-lg-12' : 'col-lg-8 col-md-8 col-sm-8 col-xs-12' ?> ">
            <h2><?php the_title(); ?></h2>
            <br/>
            <?php the_content(); ?>
            <br/>
            <?php 
              if (get_post_meta($post->ID, 'visit_link', true) != ""){
            ?>
            <div class="basic button">
              <a href="<?php echo get_post_meta($post->ID, 'visit_link', true); ?>"> <?php echo get_post_meta($post->ID, 'visit_button', true); ?> </a>
            </div>
            <?php } ?>
            </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style ="<?php echo $contact == "" && $basic_features == "" && $basic_image == "" ? 'display:none;' : 'display:block;' ?> ">
            <?php 
              if (get_post_meta($post->ID, 'contact', true) != ""){
            ?>
            <div class="block_one basic">
              <?php echo wpautop(get_post_meta($post->ID, 'contact', true)); ?>
            </div>
            <?php
              }
              if (get_post_meta($post->ID, 'basic_features', true) != ""){
            ?>
            <div class="block_two basic">
              <?php echo wpautop(get_post_meta($post->ID, 'basic_features', true)); ?>
            </div>
            <?php
              }
              if (get_post_meta($post->ID, 'basic_image', true) != ""){
            ?>
            <div class="basic_image">
              <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'basic_image', true), 'full' ); ?>
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
