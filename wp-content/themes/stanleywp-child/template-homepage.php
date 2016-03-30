<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post();?>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 image_home">
                <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'image_left_home', true), 'full' ); ?>
            </div>
            <div class="col-lg-6 col-xs-12 text_home">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div><!-- end of #content -->
<?php endwhile; ?>
<?php endif; ?>


    <div class="all-properties">
        <?php
        $args = array(
            'numberposts'=> 4,
            'offset'=> 0,
            'post_type'=> "properties",
            'tax_query' => array(
                array(
                    'taxonomy' => 'categories',
                    'field' => 'slug',
                    'terms' => 'featured'
                )
            )
        );
                    $myposts = get_posts( $args );?>
        <div class="container">
            <div class="row">
            <h2 class="center">Featured Properties</h2>
                <?php $i = 0; ?>
            <?php foreach( $myposts as $post) : setup_postdata( $post ) ?>

                <div class="property-item col-lg-3 <?php echo "property-item-".$i; ?>">
                    <h3><?php the_title();?></h3>
                    <?php echo the_post_thumbnail('medium'); ?>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
        </div>
    </div><!-- end of #content -->

<div class="gray_bar"></div>

<?php get_footer(); ?>