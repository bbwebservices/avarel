<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$section_type = $atts['type']['section_type'];
$section_name = isset($atts['title']) ? strtolower(str_replace(' ', '-', $atts['title'])) : '';

?>

<?php if ($section_type == 'default'):

  $default_section = $atts['type']['default'];
  $anim = (!empty($default_section['animation']) && $default_section['animation'] == 'on') ? 'wow fadeInUp' : '' ;
  $class = 'section';
  if ($default_section['disable_padding'] == 'top') {
    $class = 'p-bottom-140';
  } elseif ($default_section['disable_padding'] == 'bottom') {
    $class = 'p-top-140';
  } elseif ($default_section['disable_padding'] == 'yes') {
    $class = 'section-np';
  }

  ?>

  <section <?php if($section_name) echo 'id="'.esc_html($section_name).'"' ?> class="<?php echo esc_html($class); ?>">
    <div class="container">
      <?php if ($default_section['show_title'] != 'no'): ?>
      <div class="row m-bottom-100">
        <?php if ($atts['title']): ?>
        <div class="col-md-6">
          <h3><?php echo esc_html($atts['title']); ?></h3>
          <div class="divider"></div>
        </div>
        <?php endif ?>
        <?php if ($default_section['subtitle']): ?>
        <div class="col-md-6">
          <h6><?php echo esc_html($default_section['subtitle']); ?></h6>
        </div>
        <?php endif ?>
      </div>
      <?php endif ?>
      <div class="row <?php echo esc_html($anim); ?>">
        <?php echo do_shortcode( $content ); ?>
      </div>
    </div>
  </section>

<?php elseif ($section_type == 'home'): ?>

  <section id="intro">
    <?php echo do_shortcode( $content ); ?>
  </section>

<?php elseif($section_type == 'parallax'):

  $parallax_section = $atts['type']['parallax'];
  $parallax_bg  = isset($parallax_section['parallax_bg']['data']['css']['background-image']) ? $parallax_section['parallax_bg']['data']['css']['background-image'] : '';
  $bg_image = ($parallax_bg) ? 'style="background-image:'.esc_attr($parallax_bg).';"' : '';

  ?>

  <section id="<?php echo esc_html($section_name); ?>" class="section parallax-section" <?php echo $bg_image; ?> data-stellar-background-ratio="0.5">
    <div class="overlay-<?php echo esc_html($parallax_section['parallax_overlay']); ?>"></div>
    <div class="container">
      <div class="row">
        <?php echo do_shortcode( $content ); ?>
      </div>
    </div>
  </section>

<?php elseif($section_type == 'map'): ?>

  <section id="cd-google-map">
    <?php echo do_shortcode( $content ); ?>
  </section>
<?php endif ?>
