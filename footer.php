<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package txakolina
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        
        <?php if ( get_theme_mod( 'txakolina_custom_instagram' ) ) { ?>
        <div class="txakolina-instagram" data-inst="<?php echo esc_html( get_theme_mod( 'txakolina_custom_instagram' ) ); ?>">
            <h3 class="txakolina-instagram-title"><?php esc_html_e( 'Follow me on Instagram!', 'txakolina' ); ?></h3>
            <div class="txakolina-instagram-wrapper"></div>
        </div>
        <?php } ?>

		<div class="site-info">
			<?php if ( ! get_theme_mod( 'txakolina_footer_text' ) ) { ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'txakolina' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s.', 'txakolina' ), 'WordPress' ); ?></a>
				<?php printf( esc_html__( '%1$s Theme, %3$s by %2$s.', 'txakolina' ), 'txakolina', '<a href="' . esc_url( 'http://wp-themes.it/' ) . '" rel="designer">Pasquale Bucci</a>', 'crafted with <i id="cuore" class="fa fa-heart animated infinite pulse"></i>' ); ?>
			<?php } else { ?>
				<?php echo esc_html( get_theme_mod( 'txakolina_footer_text' ) ); ?>
			<?php } ?>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
