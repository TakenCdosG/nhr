<?php
/**
 * Template Name: All Person
 */
get_header(); 
global $post;
$content = $post->post_content;
?>

<div class="all-person">
  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_title();?></h2>
        <p style="margin:40px 0 70px;"><?php echo $content; ?></p>        
      </div>
    </div>
  </div>
  <?php 
  $args = array(
    'numberposts'=> -1,
    'offset'=> 0,
    'post_type'=> "person"
  );
  $myposts = get_posts( $args );
  ?>
    <div class="">
      <div class="container">
        <div class="row">
          <?php foreach( $myposts as $post) : setup_postdata( $post )  ?>
            <div class="person col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="<?php echo the_permalink(); ?>">
                <div class="person-item">
                  <?php echo the_post_thumbnail('medium'); ?>
                  <h3>                
                    <span style="font-size:22px;"><?php echo get_post_meta($post->ID, 'person_name', true);?></span>
                    <br>
                    <span style="font-size:18px; font-style:italic;"><?php echo get_post_meta($post->ID, 'person_title', true);  ?>
                  </h3>                  
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div> 
    </div>
    
</div><!-- end of #content -->

<?php get_footer(); ?>
