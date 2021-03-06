<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php if( bi_get_data('custom_favicon') !== '' ) : ?>
        <link rel="icon" type="image/png" href="<?php echo bi_get_data('custom_favicon'); ?>" />
    <?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>
                 
<?php gents_container(); // before container hook ?>

         
    <?php gents_header(); // before header hook ?>
    <header>
   
    <?php gents_in_header(); // header hook ?>
<div id="top-header">
    <div class="container">
                <div class='site-logo'>
                    <a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home">
                        <img src="<?php echo bi_get_data('custom_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
                    </a>
                </div>
            <?php
            $args = array(
                'theme_location' => 'secondary-menu',
                'depth'      => 2,
                'container'  => false,
                'menu_class'     => 'widget-wrapper widget_nav_menu',
                'walker'     => new Bootstrap_Walker_Nav_Menu()
            );

            wp_nav_menu($args);
            ?>
            <div class="break"></div>
            <?php dynamic_sidebar('header-bar'); ?>
            <div class="social_icons widget-wrapper">
                <a href="https://www.facebook.com/NHR.Properties/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="NHR properties Facebook"></a>
                <a href="https://twitter.com/nhr_properties" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="NHR properties twitter"></a>
            </div>
    </div>
</div>
<nav role="navigation">
    <div class="navbar">
        <div class="container">
           <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>
          <div class="collapse navbar-collapse navbar-1-collapse">
			   <?php
                $args = array(
                    'theme_location' => 'top-bar',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class'     => 'nav navbar-nav navbar-right',
                    'walker'     => new Bootstrap_Walker_Nav_Menu()
                );
                wp_nav_menu($args);
            ?>

          </div>
        </div>
     </div>           
</nav>
     <div id="header_slider">
         <div class="fotorama" data-maxheight="500" data-width="100%" data-fit="cover" data-nav="false" data-autoplay="3000" data-transition="crossfade" data-shuffle="true">
                 <?php
                 $my_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'home'");
                 $image_ids = get_post_meta($post->ID, 'header_images');
                 if ($image_ids == "") {
                     $image_ids = get_post_meta($my_id, 'header_images');
                     shuffle($image_ids);
                 }else {
                     $image_ids = get_post_meta($post->ID, 'header_images');
                     shuffle($image_ids);
                 }

                     foreach ($image_ids as $image)
                     {
                         foreach ($image as $image_detail)
                         {

                             $banner = $image_detail['image'][0];
                             $bannertext = $image_detail['img_texts'];
                 ?>
                             <div class="banner_image" data-img="<?php echo wp_get_attachment_url($banner); ?>"><span class="bannertext"><?php
                                foreach($bannertext as $text_img){
                                    echo $text_img;
                                }
                             ?>
                             </span></div>

                 <?php
                         }
                     }

                 ?>
         </div>
        <!-- <?php /*if(is_front_page()){*/?>
         <div id="dark_overlay"></div>
         --><?php /*} */?>
     </div>
        <div class="apartments_search"><a href="/all-properties"> <?php if(pll_current_language() == 'es'){echo "Encontrar un Apartmento &#10095;"; }else{echo "Find an Apartment &#10095;";}  ?></a> </div>
    </header><!-- end of header -->
    <?php gents_header_end(); // after header hook ?>
    
	<?php gents_wrapper(); // before wrapper ?>
    
        <div id="wrapper" class="clearfix">
    
    <?php gents_in_wrapper(); // wrapper hook ?>
