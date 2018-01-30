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
		<div class="row">
			<?php get_template_part('template-parts/content-sections/main-content'); ?>
		</div>

		<?php if ( have_rows('tab') ) : $index = 0; ?>
			<ul class="nav nav-tabs">
				<?php while ( have_rows('tab') ) : the_row();   ?>
					<li role="presentation" class="<?php if ($index == 0) { echo 'active'; } ?>">
						<a href="#<?php echo sanitize_title(get_sub_field('tab_label')); ?>"
							aria-controls="<?php echo sanitize_title(get_sub_field('tab_label')); ?>"
							data-toggle="tab"><?php the_sub_field('tab_label'); ?></a>
					</li>
				<?php $index++; endwhile; ?>
			</ul>
		<?php endif; ?>

		<?php if (have_rows('tab')) : $index = 0; ?>
			<div class="tab-content">
				<?php while ( have_rows('tab') ) : the_row(); ?>
					<div class="entry-content tab-pane fade <?php if ($index == 0) { echo 'in active'; } ?>" id="<?php echo sanitize_title(get_sub_field('tab_label')); ?>" role="tabpanel">
						<?php the_sub_field('tab_content'); ?>
					</div>
				<?php $index++; endwhile; ?>
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
