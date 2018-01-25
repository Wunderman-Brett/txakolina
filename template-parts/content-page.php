<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package txakolina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if (have_rows('full_width_callout')) : ?>
			<div class="row">
			<?php while (have_rows('full_width_callout')) : the_row(); ?>
				<div class="col-sm-12 full-width-callout">
					<div class="full-width-callout-relative">
					<?php
					$full_image = get_sub_field('full_width_image');
					if ($full_image) {
						echo wp_get_attachment_image($full_image, 'full');
					} ?>
					<div class="full-width-callout-html">
						<?php echo esc_html(the_sub_field('full_width_html')); ?>
					</div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
	<?php endif; ?>
		<?php if (have_rows('half_width_callout')) : ?>
			<div class="row">
			<?php while (have_rows('half_width_callout')) : the_row(); ?>
				<div class="col-sm-6 half-width-callout">
					<?php
					$image = get_sub_field('half_width_thumbnail');
					if ($image) {
						echo wp_get_attachment_image($image, 'large');
					}
					echo esc_html(the_sub_field('half_width_html')); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<?php if (get_field('page_small_text')) { ?>
		<small class="entry-small-text"><?php the_field('page_small_text'); ?></small>
	<?php } ?>
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
