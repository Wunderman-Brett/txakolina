<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package txakolina
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
    <div id="loader-wrapper">
  		<div id="loader"></div>
		  <div class="loader-section section-left"></div>
     	<div class="loader-section section-right"></div>
    </div>

    <?php if ( is_front_page() && ! is_paged() && get_header_image() ) { ?>
    <div id="home-hero">
      <img src="<?php echo esc_url( get_header_image() ); ?>">
				<p class="hidden-xs site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
    <?php } ?>

    <div id="overlay" class=""></div>

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'txakolina' ); ?></a>

    <!-- This is the Nano mmenu that slides in
    We're using it to show a full menu with child elements -->
    <nav id="site-navigation" class="site-navigation">
        <div class="site-navigation-close">&#x2715;</div>
    		<div class="nano">
            <div class="nano-content">
                <?php wp_nav_menu(
                  array(
                    'theme_location' => 'nano',
                    'menu_id' => 'nano-menu',
                    'menu_class' => 'nano-menu'
                    // 'walker' => new wp_bootstrap_navwalker()
                  )
                ); ?>
            </div><!-- .nano-content -->
        </div><!-- .nano -->
    </nav><!-- #site-navigation -->



    <div id="page" class="hfeed site">

    	<header id="masthead" class="site-header navbar" role="banner">
        <div class="container">
          <div class="site-branding navbar-header pull-left">

            <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>">
              <img src="<?php the_field('site_logo', 'option'); ?>" alt="Fresenius North America">
            </a>
      		</div><!-- .site-branding -->

          <div class="site-header-icons pull-right">
            <a id="txakolina-search-button" class="txakolina-search-button" href>
              <i class="fa fa-lg fa-search"></i>
            </a>
            <a id="txakolina-menu" href>
              <i class="fa fa-lg fa-bars"></i>
            </a>
          </div>
          <div class="navbar-collapse">
            <div class="navbar-right hidden-xs hidden-sm">
              <?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id' => 'navbar-menu',
                'container_class' => 'navbar-menu-container present '
              ) ); ?>
            </div>
            <div class="navbar-right">
              <div id="txakolina-search" class="txakolina-search">
                  <?php get_search_form(); ?>
              </div>
            </div>

          </div><!-- .navbar-collapse -->
        </div><!-- .container -->
    	</header><!-- #masthead -->
