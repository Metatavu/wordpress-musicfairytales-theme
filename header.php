<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                      <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><div class="mft_logo"></div> <?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
              <div class="hide-mobile"><i class="fas fa-shopping-cart" style="font-size:30px; margin-right:5px;"></i><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Katso ostoskoria' ); ?>"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a><div>
            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h2 class="header_banner_title">
                    <?php
                      if(get_theme_mod( 'banner_title' )){
                          echo get_theme_mod( 'banner_title' );
                      }else{
                          echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                      }
                    ?>
                </h2>
                <p class="header_banner_description">
                    <?php
                      if(get_theme_mod( 'banner_description' )){
                          echo get_theme_mod( 'banner_description' );
                      }
                    ?>
                </p>
                <div class="header-banner-link-container">
                    <a href="<?php echo get_permalink( get_theme_mod( 'banner_calltoaction_link' ) ) ?>" class="header_banner_link">
                    <?php
                        if(get_theme_mod( 'banner_link_text' )){
                            echo get_theme_mod( 'banner_link_text' );
                        }else{
                            echo esc_html__('Aseta linkin teksti Ulkoasu -> Mukauta -> Banner call to action');
                        }
                        ?>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (is_front_page()) { ?>
      <?php $shortDescriptionPage = get_post(get_theme_mod('frontpage_short_description_page')); ?>

      <div id="front-page-short-description">
        <div class="container"> 
          <div class="row"> 
            <div class="col text-center">
              <h2><?php echo $shortDescriptionPage->post_title?></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">  
              <?php echo apply_filters( 'the_content', $shortDescriptionPage->post_content ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } endif; ?>

    <?php if (is_front_page()) { ?>
      <div id="front-page-best-selling-products" class="mt-2">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h2 class="text-center">Suositut musiikkisadut verkkokaupassa
            </div>
          </div>
          <div class="row">
            <div class="col-sm justify-content-sm-center">
              <?php echo do_shortcode("[products best_selling=true limit=2 columns=2 orderby=popularity]"); ?>
            </div>
          </div>
        </div>
      </div>
    <?php } endif; ?>

    <?php if (is_front_page()) { ?>
      <div id="front-page-news">
        <h2> Ajankohtaista </h2>
    <?php } endif; ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>