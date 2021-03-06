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


    <div class="home-featured">
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
        <div class="container container-full">
            <div class="row">
                <?php 
                $my_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'featured-properties'");
                $post_ids = pll_get_post($my_id);

                ?>
            <h2 class="center"><?php echo get_the_title($post_ids); ?></h2>
                <?php $i = 0; ?>
            <?php foreach( $myposts as $post) : setup_postdata( $post ) ?>

                <div class="property-item col-lg-3 col-sm-3 col-xs-12 <?php echo "property-item-".$i; ?>">
                    <h3><?php the_title();?></h3>
                    <div class="home-thumb" style="background-image: url(<?php echo the_post_thumbnail_url('medium'); ?>)">
                        
                    </div>
                    <div class="property-item-background"></div>
                    <div class="property-item-information">
                       <div class="text-information"><?php echo wpautop(get_post_meta($post->ID, 'excerpt', true)); ?></div>
                        <a class="more" href="<?php the_permalink(); ?>">Learn More</a>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
        </div>
    </div><!-- end of #content -->

<div class="gray_bar">

    <div class="col-lg-3 col-sm-3 col-xs-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_logos/the_heights_on_the_river.png"/>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_logos/new_haven_village_suites.png"/>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_logos/humphrey_village.png"/>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_logos/ashmun_flats.png"/>
    </div>

</div>

<?php get_footer(); ?>