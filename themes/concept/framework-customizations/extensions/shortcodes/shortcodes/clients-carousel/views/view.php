<div id="owl-clients">
  <?php foreach ($atts['carousel'] as $carousel): ?>
  <div class="client"><img src="<?php echo esc_url($carousel['url']); ?>" alt=""></div>
  <?php endforeach ?>
</div>
