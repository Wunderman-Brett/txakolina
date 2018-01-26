<?php
/**
 *
 * @package txakolina
 */

get_header(); ?>
<div id="content" class="site-content container">

<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
<?php get_footer(); ?>
