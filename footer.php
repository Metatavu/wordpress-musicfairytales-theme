<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (is_front_page()) { ?>
  </div>
<?php } ?>
		
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )) { ?>
			</div><!-- .row -->
		</div><!-- .container -->
  </div><!-- #content -->
  
  <?php if (is_front_page()) { ?>
    <?php $frontlinePage1 = get_post(get_theme_mod('frontline_page_1')); ?>
    <?php $frontlinePage2 = get_post(get_theme_mod('frontline_page_2')); ?>

    <div id="frontline_pages" style="display: none">
      <div class="container"> 
        <div class="row"> 
          <div class="col">
            <div class="front-line-page mb-3 mb-lg-0" style="background-image: url('<?php echo get_the_post_thumbnail_url($frontlinePage1) ?>')">
              <h3><?php echo $frontlinePage1->post_title?></h3>
            </div>  
        </div>  
          <div class="col">
            <div class="front-line-page mb-3 mb-lg-0" style="background-image: url('<?php echo get_the_post_thumbnail_url($frontlinePage2) ?>')">
              <h3><?php echo $frontlinePage2->post_title?></h3>
            </div>  
        </div>  
      </div>
    </div>
  </div>
  <?php } ?>

  <div id="footer-menu">
    <div class="container"> 
      <div class="row"> 
        <div class="col">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
      </div>
    </div>
  </div>

  <?php $somePage = get_post(get_theme_mod('some_page')); ?>

  <div id="some_pages">
    <div class="container"> 
      <div class="row"> 
        <div class="col text-center">
          <?php echo apply_filters( 'the_content', $somePage->post_content ); ?>
        </div>
      </div>  
    </div>
  </div>

  <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://www.metatavu.fi/" target="_blank" title="Metatavu" alt="Musicfairytales Theme">Teeman luonut Metatavu</a>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php } ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>