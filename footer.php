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

		<div class="site-info">Site Info div here	
    </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
