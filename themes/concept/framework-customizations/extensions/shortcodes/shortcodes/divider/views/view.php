<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$class = '';

if (!empty($atts['centered'])) {
  $class = 'divider-center';
}
elseif ($atts['size'] == 'default') {
  $class = 'divider';
}
elseif ($atts['size'] == 'small') {
  $class = 'divider-small';
}

?>

<div class="<?php echo esc_html($class); ?>"></div>
