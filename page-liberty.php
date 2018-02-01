<?php
/**
 * Template Name: Liberty Page
 *
 * @package simona
 */

get_header(); ?>
<div id="content" class="site-content container">
  <div class="row">
  	<div id="primary" class="content-area">
  		<main id="main" class="site-main col-md-12" role="main">
  			<div class="liberty-more-info">

  			<?php while ( have_posts() ) : the_post(); ?>

  				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  						<header class="entry-header">
  							<h1 class="liberty-intro"><?php the_title(); ?></h1>
  							<?php if (get_field('liberty_tagline')) {
  								echo '<h2 class="liberty-tagline">' . get_field('liberty_tagline') . '</h2>';
  							} ?>
  						</header><!-- .entry-header -->

  					<div class="entry-content liberty-content">
  						<?php the_content(); ?>
  					</div><!-- .entry-content -->

  					<footer class="entry-footer">
  						<?php
  							edit_post_link(
  								sprintf(
  									/* translators: %s: Name of current post */
  									esc_html__( 'Edit %s', 'simona' ),
  									the_title( '<span class="screen-reader-text">"', '"</span>', false )
  								),
  								'<span class="edit-link">',
  								'</span>'
  							);
  						?>
  					</footer><!-- .entry-footer -->

  				</article><!-- #post-## -->
  				<?php if (get_field('liberty_form')) { ?>
  					<div class="liberty-form-container">
  						<?php the_field('liberty_form'); ?>
  						<p id="successMessage" style="display:none;"></p>
  					</div>
  					<?php } ?>
  					<?php the_field("liberty_more_info"); ?>
  					<hr class="liberty-hr" />
  				</div>
  				<footer class="liberty-footer">
  				  <?php the_field("liberty_footer"); ?>
  				</footer>
  			<?php endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->
  </div><!-- .row -->
</div>
<?php get_footer(); ?>
