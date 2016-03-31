<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>


<?php gents_container_end(); // after container hook ?>


  <!-- +++++ Footer Section +++++ -->
<footer id="footer">
<div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php
            $args = array(
                'theme_location' => 'top-bar',
                'depth'      => 2,
                'container'  => false,
                'menu_class'     => 'col-lg-4 widget-wrapper widget_nav_menu',
                'walker'     => new Bootstrap_Walker_Nav_Menu()
            );
            wp_nav_menu($args);
            ?>
            <?php
            $args = array(
                'theme_location' => 'secondary-menu',
                'depth'      => 2,
                'container'  => false,
                'menu_class'     => 'col-lg-4 widget-wrapper widget_nav_menu',
                'walker'     => new Bootstrap_Walker_Nav_Menu()
            );
            wp_nav_menu($args);
            ?>
            <div class="col-lg-4 signup-form widget-wrapper">
                <form>
                    <input type="text" placeholder="Email signup">
                    <input type="submit" value="Submit">
                </form>
            </div>

          <?php dynamic_sidebar('footer-left'); ?>
        </div>
<!--        <div class="col-lg-4">
          <?php /*dynamic_sidebar('footer-middle'); */?>
        </div>-->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <?php dynamic_sidebar('footer-right'); ?>
        </div>
      
      </div><!-- /row -->
    </div><!-- /container -->
</footer><!-- end #footer -->




<?php wp_footer(); ?>

</body>
</html>