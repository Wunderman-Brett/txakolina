<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package txakolina
 */

?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
        <?php if ( ! is_attachment() ) { ?>    
           
            <section class="featured spacer">
        
                    <?php if ( ! post_password_required() ) { ?>
                        <?php if ( has_post_thumbnail() ) { ?>
                            
                            <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) ); ?>
                        <?php } ?>
                   
                    <?php if ( is_sticky() && ! is_paged() && has_post_thumbnail() ) { ?>
                        
                        <div class="txakolina-ribbon-wrapper">
                            <div class="txakolina-ribbon"><?php esc_html_e( 'Featured', 'txakolina' ); ?></div>
                        </div>
                        
                    <?php } ?>
                    
                    <div class="txakolina-cat-aut-wrapper hidden-xs">
                    <div class="txakolina-cat-aut">
                    <?php txakolina_entry_categories(); ?>
                        <?php if ( is_sticky() && ! is_paged() && ! has_post_thumbnail() ) { ?>
                        <div class="txakolina-ribbon-simple"><?php esc_html_e( 'Featured', 'txakolina' ); ?></div>
                        <?php } ?>
                    </div>
                    </div>
                    
                    <?php } ?>
                    
	           </section>
        
        <?php } ?>
        
                <header class="entry-header">
        
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                    
                    <?php if ( 'post' === get_post_type() ) : ?>
		              <div class="entry-meta visible-xs-block">
							<?php txakolina_posted_on(); ?> 
                        <?php $categories_list = get_the_category_list( esc_html__( ' &bull; ', 'txakolina' ) ); ?>
							<?php if ( $categories_list && txakolina_categorized_blog() ) { ?>
						<?php printf( '<span class="cat-links">' . esc_html__( ' in %1$s', 'txakolina' ) . '</span>', $categories_list ); // WPCS: XSS OK. ?>
							<?php } ?>
		              </div><!-- .entry-meta -->
					<?php endif; ?>

                </header><!-- .entry-header -->
        
                <div class="entry-content">
                    <?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'txakolina' ), array( 'span' => array( 'class' => array() ) ) ), the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					?>

                    <?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'txakolina' ),
						'after'  => '</div>',
					) );
					?>
                </div><!-- .entry-content -->
                
                <footer class="entry-footer">
					<?php txakolina_entry_footer(); ?>
                </footer><!-- .entry-footer -->
    
</article><!-- #post-## -->
 