<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package txakolina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
    <section class="featured">
		<?php
			// Post thumbnail.
			txakolina_post_thumbnail();
		?>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<div class="txakolina-ribbon-wrapper">
				<div class="txakolina-ribbon"><?php esc_html_e( 'Featured', 'txakolina' ); ?></div>
			</div>
		<?php } ?>
	</section>
	<header class="entry-header">
        
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php txakolina_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
