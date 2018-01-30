<?php $hero = get_field('hero_image'); ?>
<?php $overlay = get_field('hero_overlay_text'); ?>
<?php if($hero) : ?>
  <div class="row">
    <div class="col-sm-12 full-width-callout">
      <div class="full-width-callout-relative hero">
        <?php $img_src = $hero['sizes']['large']; ?>
        <img src="<?php echo $img_src ?>">
        <?php if ($overlay) : ?>
        <div class="full-width-callout-html">
          <?php echo $overlay; ?>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
