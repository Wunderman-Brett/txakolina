<div class="row">
<?php if (have_rows('right_column_boxes')) : ?>
  <div class="col-md-9 col-sm-8 entry-content">
    <?php the_content(); ?>
  </div>
  <div class="col-md-3 col-sm-4">
    <?php while (have_rows('right_column_boxes')) : the_row(); ?>
      <div class="widget right-column-box">
        <?php $image = get_sub_field('box_thumbnail');
        if ($image) :
          echo wp_get_attachment_image($image, 'medium');
        endif; ?>
        <div class="widget-content">
          <h4 class="widget-title"><?php the_sub_field('box_heading') ?></h4>
          <?php the_sub_field('box_text'); ?>
          <a class="btn btn-cta" href="<?php the_sub_field('box_cta_link'); ?>" target="_blank" rel="noopener"><?php the_sub_field('box_cta_label'); ?></a>
        </div>
      </div>

    <?php endwhile; ?>
  </div>
<?php else : ?>
  <div class="col-md-12 entry-content">
    <?php the_content(); ?>
  </div>
<?php endif; ?>
</div>
