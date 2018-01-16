<?php
/**
 * Template part for displaying single post navigation.
 *
 * @package txakolina
 */

?>

        <?php if ( ! is_singular() ) { ?>
            <div class="excerpt-links excerpt-close"><i class="fa fa-times"></i></div>
        <?php } else { ?>
            <?php if ( ! is_attachment() ) { ?>
                <?php previous_post_link( '%link','<div class="excerpt-links"><i class="fa fa-chevron-left"></i></div>' ); ?>
            <?php } ?>

            <?php if ( ! is_attachment() ) { ?>
                <?php next_post_link( '%link','<div class="excerpt-links"><i class="fa fa-chevron-right"></i></div>' ); ?>
            <?php } ?>
        <?php } ?>
