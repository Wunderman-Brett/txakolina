<?php if (have_rows('half_width_callout')) : ?>
  <div class="row">
  <?php while (have_rows('half_width_callout')) : the_row(); ?>
    <div class="col-sm-6 half-width-callout">
      <?php if (get_sub_field('image_or_video') == 'video') {
        echo get_sub_field('video');
      } else {
        $image = get_sub_field('half_width_thumbnail');
        if ($image) {
          echo wp_get_attachment_image($image, 'large');
        }
      }
      echo esc_html(the_sub_field('half_width_html')); ?>
      <?php if (get_sub_field('half_width_heading')) : ?>
      <h3><?php the_sub_field('half_width_heading'); ?></h3>
      <?php endif; ?>
      <?php if (get_sub_field('half_width_link')) : ?>
      <a href="<?php the_sub_field('half_width_link'); ?>" class="morelink"><?php the_sub_field('half_width_link_text'); ?></a>
    <?php endif; ?>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>
