<?php
/**
 * Error 404 Template
 *
 *
 * @file           404.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Creating_an_Error_404_Page
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<!-- White Wrap Ver. 1 / Error -->
    <div id="w1">
        <div class="container">
            <br>
            <div class="col-lg-10 col-lg-offset-1 centered" style="margin-bottom:45px">
                <h1 style="font-size: 7em">404</h1>
                <p>Unfortunately, the page you tried accessing could not be retrieved.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
            </div>
        </div><!-- /container -->
    </div> <!-- /White Wrap 1 / Error -->

<?php get_footer(); ?>