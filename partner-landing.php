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

                            </div>
                        </div>
                    </div>
                </header>
                <div class="value-prop">
                    <div class="value-prop-inner-wrapper">
                        <div class="value-prop-card">
                            <h3>VALUE PROPOSITION #1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#">Learn More ></a>
                            <div id="border"></div>
                        </div>
                        <div class="value-prop-card">
                            <h3>VALUE PROPOSITION #2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#">Learn More ></a>
                            <div id="border"></div>
                        </div>
                        <div class="value-prop-card">
                            <h3>VALUE PROPOSITION #3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#">Learn More ></a>
                            <div id="border"></div>
                        </div>
                        <div class="value-prop-card">
                            <h3>VALUE PROPOSITION #4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#">Learn More ></a>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

    <?php get_template_part('template-parts/partner','bottom_nav'); ?>
</div>
<?php get_footer(); ?>
