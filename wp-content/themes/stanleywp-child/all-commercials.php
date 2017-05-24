<?php
/**
 * Template Name: All Commercial
 */
get_header(); 
global $post;
$content = $post->post_content;
?>

<div class="all-developments">
  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_title();?></h2>
        <p style="margin:40px 0;"><?php echo $content; ?></p>        
      </div>
    </div>
  </div>
  <?php 
  $args = array(
    'numberposts'=> -1,
    'offset'=> 0,
    'post_type'=> "commercial"
  );
  $myposts = get_posts( $args );
  ?>
    <div class="container">
      <div class="row">
        <div class="masonry-commercial">
          <div class="grid">
            <div class="grid-sizer"></div>
            <?php foreach( $myposts as $post) : setup_postdata( $post )  ?>
            <div class="grid-item">
               <a href="<?php echo the_permalink(); ?>">
                <div class="commercial">
                  <?php 
                  if(get_post_meta($post->ID, 'commercial_leased', true) == 1){
                    echo "<div class='leased'>Leased</div>";
                  }
                  echo the_post_thumbnail(); ?>

                  <h3><?php the_title();?></h3>
                </div>
              </a>           
            </div>
            <?php endforeach; ?>
          </div>          
        </div>
      </div> 
    </div>
    
</div><!-- end of #content -->

<?php get_footer(); ?>
