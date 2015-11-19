<?php

require_once LIB_DIR . '/includes/colors.php';

function cp_customizer(){
  $primary_font = cp_options('primary_font');
  $heading_font = cp_options('heading_font');
  $primary_color = cp_options('primary_color');
  $custom_css = cp_options('custom_css');

  $output = '<style type="text/css">';

  if ($primary_font && $primary_font['font-family'] != 'Roboto') {
    $font_elements = 'body, .btn-main, h6, blockquote p, .navbar-default .navbar-brand, .navbar-default .navbar-nav > li > a, .slides-navigation a, #sync2 .service-item h1, .box-count h1, #contact-form input[type=text], #contact-form input[type=email], #contact-form textarea, #footer .footer-social, #submit-btn';
    $output .= $font_elements . '{font-family: "'.esc_html($primary_font['font-family']).'";}';
    if (isset($primary_font['font-weight']) && $primary_font['font-weight']) {
      $output .= $font_elements . '{font-weight: '.esc_html($primary_font['font-weight']).';}';
    }
  }

  if ($heading_font && $heading_font['font-family'] != 'Roboto Condensed') {
    $output .= 'h1, h2, h3, h4, h5, #slides .slide-caption h1{font-family: "'.esc_html($heading_font['font-family']).'";}';
  }

  if ($primary_color && $primary_color != '#9E9B7E') {
    $output .= cp_get_custom_css($primary_color);
  }

  if ($custom_css) {
    $output .= $custom_css;
  }

  $output .= "</style>\r\n";


  echo $output;
}

add_action('wp_head', 'cp_customizer');
