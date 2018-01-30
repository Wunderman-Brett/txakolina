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
	<?php $smaller_heading = get_field('smaller_size_heading') == true ? 'smaller' : '' ?>
	<?php if ( ! is_front_page() ) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title ' . $smaller_heading . '">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	<?php } ?>

	<div class="">
		<?php get_template_part('template-parts/content-sections/hero') ?>
		<?php get_template_part('template-parts/content-sections/main-content'); ?>

	<?php get_template_part('template-parts/content-sections/full-width-callout'); ?>
	<?php get_template_part('template-parts/content-sections/half-width-callout'); ?>
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
