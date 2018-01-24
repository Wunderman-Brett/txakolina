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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<?php the_title( '<h1 class="page-title page-title-home">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php if (have_rows('metric')) : ?>
							<div class="row">
							<?php while (have_rows('metric')) : the_row(); ?>
								<div class="col-sm-6 col-md-4 metric">
									<?php $metric_graphic = get_sub_field('metric_graphic'); ?>
									<img src="<?php echo esc_url($metric_graphic['url']); ?>" alt="">
									<h3 class="metric-h3"><span class="metric-head"><?php the_sub_field('metric_head') ?></span><br>
									<span class="metric-subhead"><?php the_sub_field('metric_subhead') ?></span></h3>
									<p class="metric-link"><a href="<?php echo esc_url(the_sub_field('metric_link')); ?>" class="morelink"><?php the_sub_field('metric_link_label'); ?></a></p>
								</div>
							<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'txakolina' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->

				</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
<?php get_footer(); ?>
