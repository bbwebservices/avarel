<?php

function cp_hex_color_mod($hex, $diff) {
  $rgb = str_split(trim($hex, '# '), 2);

  foreach ($rgb as &$hex) {
    $dec = hexdec($hex);
    if ($diff >= 0) {
      $dec += $diff;
    }
    else {
      $dec -= abs($diff);
    }
    $dec = max(0, min(255, $dec));
    $hex = str_pad(dechex($dec), 2, '0', STR_PAD_LEFT);
  }

  return '#'.implode($rgb);
}

function cp_get_custom_css($color){
  $css_to_return = '
  a {
    color: '.esc_attr($color).';
  }

  a:hover,
  a:focus,
  a:active {
    color: '.cp_hex_color_mod($color, -35).';
  }

  .form-control:focus {
    border-color: '.esc_attr($color).';
  }

  #main-menu > li .dropdown-menu > li > a:hover {
    color: '.esc_attr($color).';
  }

  .divider {
    background-color: '.esc_attr($color).';
  }
  .divider-small {
    background-color: '.esc_attr($color).';
  }
  .divider-center {
    background-color: '.esc_attr($color).';
  }
  .divider-center-small {
    background-color: '.esc_attr($color).';
  }

  .navbar-default .navbar-nav  > .active  > a,
  .navbar-default .navbar-nav  > .active  > a:hover,
  .navbar-default .navbar-nav  > .active  > a:focus {
    color: '.esc_attr($color).';
  }

  .navbar-default .navbar-nav  > .open  > a,
  .navbar-default .navbar-nav  > .open  > a:hover,
  .navbar-default .navbar-nav  > .open  > a:focus {
    color: '.esc_attr($color).';
  }
  .navbar-default .navbar-nav  > li  > a:hover,
  .navbar-default .navbar-nav  > li  > a:focus {
    color: '.esc_attr($color).';
  }

  .social-icons li {
    border-right: 1px solid '.esc_attr($color).';
  }

  .slides-navigation a.prev {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  .slides-navigation a.next {
    border-top: 1px solid '.esc_attr($color).';
  }
  .slides-navigation a.prev:hover {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }
  .slides-navigation a.next:hover {
    -webkit-box-shadow: 0 4px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 4px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 4px 0 0 '.esc_attr($color).' inset;
  }

  .slides-pagination a {
    border-top: 1px solid '.esc_attr($color).';
  }
  .slides-pagination a.current {
    border-bottom: 1px solid '.esc_attr($color).';
  }

  .progress-bar {
    background-color: '.esc_attr($color).';
  }
  .progress {
    border-bottom: 1px solid '.esc_attr($color).';
  }

  .work-btn {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  .work-btn:hover,
  .work-btn:active,
  .work-btn:focus {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }

  .work-navigation a {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  .work-navigation a:hover {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }

  #sync2 .service-item {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  #sync2 .service-item i {
    color: '.esc_attr($color).';
  }

  #sync2 .service-item:hover {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }

  .box-count {
    border-top: 1px solid '.esc_attr($color).';
  }

  #testimonials .owl-controls .owl-page span {
    border-top: 1px solid '.esc_attr($color).';
  }

  #testimonials .owl-controls .owl-page.active span {
    border-bottom: 1px solid '.esc_attr($color).';
  }

  .team-member .member ul.member-social {
    border-top: 5px solid '.esc_attr($color).';
  }

  .rating i {
    color: '.esc_attr($color).';
  }

  .table-plans {
    border: 1px solid '.esc_attr($color).';
  }
  #contact-form input[type=text],
  #contact-form input[type=email] {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  #contact-form textarea {
    border: 1px solid '.esc_attr($color).';
  }
  .wpcf7-submit {
    border-bottom: 1px solid '.esc_attr($color).';
  }
  .wpcf7-submit:hover,
  .wpcf7-submit:active,
  .wpcf7-submit:focus {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }

  .page-navigation a:hover {
    -webkit-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    -moz-box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
    box-shadow: 0 -5px 0 0 '.esc_attr($color).' inset;
  }

  .page-navigation a,
  .page-navigation span {
    border-bottom: 1px solid '.esc_attr($color).';
  }

  .post-tags > a:hover {
    border-color: '.esc_attr($color).';
    background-color: '.esc_attr($color).';
  }';

  $css_to_return = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css_to_return);

  // Remove space after colons
  $css_to_return = str_replace(': ', ':', $css_to_return);

  // Remove whitespace
  $css_to_return = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css_to_return);

  return $css_to_return;
}
?>
