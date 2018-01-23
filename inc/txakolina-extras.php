<?php
/**
 * Custom functions for this theme.
 *
 * @package txakolina
 */


if ( ! function_exists( 'txakolina_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see txakolina_custom_header_setup().
	 */
	function txakolina_header_style() {
		$header_text_color = get_header_textcolor();

		// If no custom options for text are set, let's bail
		// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
		if ( HEADER_TEXTCOLOR === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
        .site-description {
            clip: rect(1px, 1px, 1px, 1px);
        }
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
        .site-description {
            color: #<?php echo esc_attr( $header_text_color ); ?>;
            border-color: #<?php echo esc_attr( $header_text_color ); ?>;
            clip: auto;
        }
	<?php endif; ?>
    </style>
	<?php
	}
endif; // txakolina_header_style.

if ( ! function_exists( 'txakolina_comment_form_fields' ) ) :
	/**
	 * Custom comment form fields
	 * @param array $fields The default comment fields.
	 */
	function txakolina_comment_form_fields( $fields ) {
		// Include these if you intend to use them.
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );

		// Your code here!
		$fields = array(

		'author' =>
		'<div class="row"><div class="comment-form-author col-md-4"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" placeholder="' . esc_html__( 'Your full name', 'txakolina' ) . ( $req ? '*' : '' ) . '" /></div>',

		'email' =>
		'<div class="comment-form-email col-md-4"><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" placeholder="' . esc_html__( 'Email address', 'txakolina' ) . ( $req ? '*' : '' ) . '" /></div>',

		'url' =>
		'<div class="comment-form-url col-md-4"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" placeholder="' . esc_html__( 'Website', 'txakolina' ) . '" /></div></div>',
		);
		// Return.
		return $fields;
	}
endif;
add_filter( 'comment_form_default_fields', 'txakolina_comment_form_fields' );

if ( ! function_exists( 'txakolina_gallery_atts' ) ) :
	/**
	 * Custom comment form fields
	 *
	 * @param array $output The shortcode_atts() merging of $pairs and $atts.
	 * @param array $pairs The default attributes defined for the shortcode.
	 * @param array $atts The attributes supplied by the user within the shortcode.
	 */
	function txakolina_gallery_atts( $output, $pairs, $atts ) {
		$output['size'] = 'gallery-thumb';
		return $output;
	}
endif;
add_filter( 'shortcode_atts_gallery', 'txakolina_gallery_atts', 10, 3 );

if ( ! function_exists( 'txakolina_prepend_attachment' ) ) :
	/**
	 * Set default image size on the attachment pages.
	 */
	function txakolina_prepend_attachment() {
		return '<p>' . wp_get_attachment_link( 0, 'full', false ) . '</p>';
	}
endif;
add_filter( 'prepend_attachment', 'txakolina_prepend_attachment' );
