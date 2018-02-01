<?php if (have_rows('full_width_callout')) : ?>
  <div class="row">
  <?php while (have_rows('full_width_callout')) : the_row(); ?>
    <div class="col-sm-12 full-width-callout">
      <div class="full-width-callout-relative">
        <?php
        $full_image = get_sub_field('full_width_image');
        $img_src = $full_image['sizes']['large'];
        if ($full_image) { ?>
        <img src="<?php echo $img_src ?>">
        <?php } ?>
        <div class="full-width-callout-html">
          <?php if (get_sub_field('full_width_heading')) : ?>
          <h2><?php the_sub_field('full_width_heading'); ?></h2>
          <?php endif; ?>
          <?php the_sub_field('full_width_html'); ?>
          <?php if (get_sub_field('full_width_link')) : ?>
          <a href="<?php the_sub_field('full_width_link'); ?>" class="morelink"><?php the_sub_field('full_width_link_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>
