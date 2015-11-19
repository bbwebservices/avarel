<?php


$home_slider = $atts['home_slider'];

?>
<?php if ($home_slider): ?>
<div class="left-border"></div>
<div class="right-border"></div>
<div class="bottom-border"></div>
<div id="slides">
  <ul class="slides-container">
  <?php foreach ($home_slider as $slider): ?>
    <?php $text_color = (isset($slider['text_color']) && $slider['text_color'] == 'light') ? 'white-text' : '' ; ?>
    <?php $button_color = (isset($slider['text_color']) && $slider['text_color'] == 'light') ? 'white' : 'black' ; ?>
    <li>
      <img src="<?php echo esc_url($slider['image']['url']); ?>" alt="" data-stellar-ratio="0.4">
      <div class="caption-wrapper <?php echo esc_html($text_color); ?>">
        <div class="slide-caption">
          <a href="#">
            <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><?php echo esc_html($slider['title']); ?></h1>
          </a>
          <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><?php echo esc_html($slider['text']); ?></h6>
          <?php if (isset($slider['button_text']) && $slider['button_text'] != ''): ?>
          <a href="<?php echo esc_url($slider['button_url']); ?>" class="btn btn-main <?php echo esc_html($button_color); ?> wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><?php echo esc_html($slider['button_text']); ?></a>
          <?php endif ?>
        </div>
      </div>
    </li>
  <?php endforeach ?>
  </ul>
  <nav class="slides-navigation">
    <a href="#" class="next"><?php _e('Next', 'concept'); ?></a>
    <a href="#" class="prev"><?php _e('Back', 'concept'); ?></a>
  </nav>
</div>
<?php endif ?>
