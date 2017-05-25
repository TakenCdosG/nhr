<?php
/**
 * Template Name: All Developments
 */
get_header(); 
global $post;
$content = $post->post_content;
?>

<div class="all-developments" stylee="margin-bottom:90px">
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
    'post_type'=> "developments"
  );
  $myposts = get_posts( $args );
  ?>
    <div class="">
      <div class="container">
        <div class="row">
          <?php foreach( $myposts as $post) : setup_postdata( $post )  ?>
          
            <div class="development col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="<?php echo the_permalink(); ?>">
                <?php echo the_post_thumbnail('medium'); ?>
                <h3><?php the_title();?></h3>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div> 
    </div>
    
</div><!-- end of #content -->

<?php get_footer(); ?>
