<div id="sync2" class="owl-carousel">
  <?php foreach ($atts['services'] as $service): ?>
  <div class="service-item">
    <i class="<?php echo esc_html($service['icon']); ?>"></i>
    <h1><?php echo esc_html($service['name']); ?></h1>
  </div>
  <?php endforeach ?>
</div>

<div id="sync1" class="owl-carousel">
  <?php foreach ($atts['services'] as $service): ?>
    <div class="service-item">
      <div class="row">
        <div class="col-md-6">
        <p><?php echo esc_html($service['text_one']); ?></p>
        </div>
        <div class="col-md-6">
          <p><?php echo esc_html($service['text_two']); ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
