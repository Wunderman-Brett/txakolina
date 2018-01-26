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
		<div class="row">
			<?php if (have_rows('right_column_boxes')) : ?>
				<div class="col-md-9 col-sm-8">
					<?php the_content(); ?>
				</div>
				<div class="col-md-3 col-sm-4">
					<?php while (have_rows('right_column_boxes')) : the_row(); ?>
						<h2><?php the_sub_field('box_heading') ?></h2>
				</div>
			<?php endwhile; endif; ?>
		</div>

		<?php if (have_rows('full_width_callout')) : ?>
			<div class="row">
			<?php while (have_rows('full_width_callout')) : the_row(); ?>
				<div class="col-sm-12 full-width-callout">
					<div class="full-width-callout-relative">
						<?php
						$full_image = get_sub_field('full_width_image');
						$img_src = $full_image['sizes']['large'];
						if ($full_image) { ?>
						<img src="<?php echo $img_src ?>">
						<?php } ?>
						<div class="full-width-callout-html">
							<h2><?php the_sub_field('full_width_heading'); ?></h2>
							<a href="<?php the_sub_field('full_width_link'); ?>" class="morelink"><?php the_sub_field('full_width_link_text'); ?></a>
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
					<?php if (get_sub_field('image_or_video') == 'video') {
						echo get_sub_field('video');
					} else {
						$image = get_sub_field('half_width_thumbnail');
						if ($image) {
							echo wp_get_attachment_image($image, 'large');
						}
					}
					echo esc_html(the_sub_field('half_width_html')); ?>
					<h3><?php the_sub_field('half_width_heading'); ?></h3>
					<a href="<?php the_sub_field('half_width_link'); ?>" class="morelink"><?php the_sub_field('half_width_link_text'); ?></a>
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
