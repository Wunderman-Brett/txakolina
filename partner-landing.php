<?php
/**
 * Template Name: Partner Landing Page
 *
 * @package txakolina
 */

get_header(); ?>
<div id="content" class="site-content container">

    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <header class="hero blue-overlay">
                    <div class="hero-wrapper">
                        <div class="hero-left-wrapper alignleft">
                            <div class="hero-breadcrumbs-container">
                                <?php
                                    echo do_shortcode( '[breadcrumb]' ); 
                                ?>
                            </div>
                            <div class="hero-logo-container">
                                <img class="hero-partner-logo" src="http://placecorgi.com/70/40" alt="">
                                <span class="hero-partner-name">National Cardiovascular Partners</span>
                            </div>
                            <div class="hero-text-container">
                                <h1>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.</h1>
                            </div>
                        </div>
                        <div class="hero-right-wrapper alignright">
                            <div class="hero-cta-container">
                                <a href="#">Dolor Sit Amet</a>
                            </div>
                        </div>
                    </div>
                </header>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

    <?php get_template_part('template-parts/partner','bottom_nav'); ?>
</div>
<?php get_footer(); ?>
