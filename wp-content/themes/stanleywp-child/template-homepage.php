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
            <h2><?php the_title();?></h2>
            <?php the_content(); ?> asdf asd
        </div>
    </div>
</div><!-- end of #content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>