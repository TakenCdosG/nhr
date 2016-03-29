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
            <div class="col-lg-6 col-xs-12">

            </div>
            <div class="col-lg-6 col-xs-12">
                <h2><?php the_title();?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div><!-- end of #content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>