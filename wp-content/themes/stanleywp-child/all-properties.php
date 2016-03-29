<?php
/**
 * Template Name: All Properties
 */
get_header(); 
?>

<div class="all-properties">
  <div class="container"> 
    <div class="row" style="text-align:center;">
      <h2><?php the_title();?></h2>
    </div>
  </div>
  <?php 
  $args = array(
    numberposts=> -1,
    offset=> 0,
    post_type=> "properties",
    'tax_query' => array(
      array(
        'taxonomy' => 'categories',
        'field' => 'slug',
        'terms' => 'featured'
      )
    )
  );
  $myposts = get_posts( $args );
  foreach( $myposts as $post) : setup_postdata( $post ) ?>
    <div class="property-list">
      <div class="container">
        <div class="row">
          <div class="property-item">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <?php echo the_post_thumbnail(); ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <h3><?php the_title();?></h3>
              <div class="excerpt" style="margin-bottom:15px;">
                <?php echo wpautop(get_post_meta($post->ID, 'excerpt', true)); ?>
                <div><a class="more" href="<?php the_permalink(); ?>"><?php if(have_posts()) : while(have_posts()) : the_post(); echo get_post_meta($post->ID, 'learn_more', true); endwhile; endif;?></a></div>
              </div>
            </div>
          <div style="clear:both;"></div>
          </div>
        </div>
      </div> 
    </div>
    <?php endforeach; ?>
</div><!-- end of #content -->
<?php if(have_posts()) : while(have_posts()) : the_post();?>
<div class="container">
  <?php 

  if(get_post_meta($post->ID, 'callto_title', true) == "" && get_post_meta($post->ID, 'callto_subtitle', true) == "" && get_post_meta($post->ID, 'callto_button', true) == "" ){}else{ ?>
  <div class="row callto">
    <div class="col-lg-7 col-md-7">
      <h3><?php echo (get_post_meta($post->ID, 'callto_title', true)); ?></h3>
      <p><?php echo get_post_meta($post->ID, 'callto_subtitle', true); ?></p>
    </div>
    <div class="col-lg-5 col-md-5">
      <?PHP if(get_post_meta($post->ID, 'callto_link', true)!= ""){ ?>
      <div class="button">
        <a href="<?php echo get_post_meta($post->ID, 'callto_link', true);?>"><?php echo get_post_meta($post->ID, 'callto_button', true) != "" ? get_post_meta($post->ID, 'callto_button', true) : 'VIEW ALL AVAILABLE APARTAMENTS'; ?></a>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
</div>
<?php
    endwhile;
    endif;
?>
<?php get_footer(); ?>
