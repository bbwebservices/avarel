<?php

$bg_image = (cp_options('footer_bg')) ? cp_options('footer_bg') : '';

?>
<footer id="footer" class="section parallax-section" data-stellar-background-ratio="0.5" <?php if ($bg_image != '' && $bg_image['url'] != '') echo 'style="background-image: url('.esc_url($bg_image['url']).');"' ?>>
  <div class="overlay-dark"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="footer-social list-inline">
          <?php if (cp_options('linkedin')): ?>
          <li><a href="<?php echo esc_url(cp_options('linkedin')); ?>"><?php _e('Linkedin', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('behance')): ?>
          <li><a href="<?php echo esc_url(cp_options('behance')); ?>"><?php _e('Behance', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('dribbble')): ?>
          <li><a href="<?php echo esc_url(cp_options('dribbble')); ?>"><?php _e('Dribbble', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('facebook')): ?>
          <li><a href="<?php echo esc_url(cp_options('facebook')); ?>"><?php _e('Facebook', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('pinterest')): ?>
          <li><a href="<?php echo esc_url(cp_options('pinterest')); ?>"><?php _e('Pinterest', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('twitter')): ?>
          <li><a href="<?php echo esc_url(cp_options('twitter')); ?>"><?php _e('Twitter', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('instagram')): ?>
          <li><a href="<?php echo esc_url(cp_options('instagram')); ?>"><?php _e('Instagram', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('youtube')): ?>
          <li><a href="<?php echo esc_url(cp_options('youtube')); ?>"><?php _e('Youtube', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('google_plus')): ?>
          <li><a href="<?php echo esc_url(cp_options('google_plus')); ?>"><?php _e('Google +', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('tumblr')): ?>
          <li><a href="<?php echo esc_url(cp_options('tumblr')); ?>"><?php _e('Tumblr', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('flickr')): ?>
          <li><a href="<?php echo esc_url(cp_options('flickr')); ?>"><?php _e('Flickr', 'concept'); ?></a></li>
          <?php endif ?>
          <?php if (cp_options('500px')): ?>
          <li><a href="<?php echo esc_url(cp_options('500px')); ?>"><?php _e('500px', 'concept'); ?></a></li>
          <?php endif ?>
        </ul>
      </div>
    </div>
    <div class="row m-top-20">
      <div class="col-md-12 text-center">
        <?php echo esc_html(cp_options('footer_text')); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
