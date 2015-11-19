<?php if (!defined('FW')) { die('Forbidden'); }

$forms = array();
$wp_cf7 = get_posts('post_type=wpcf7_contact_form');

foreach ( $wp_cf7 as $post ) : setup_postdata( $post );
  $forms[$post->ID] = get_the_title( $post->ID );
endforeach;

$options = array(
  'form_id' => array(
    'type' => 'select',
    'label' => __('Select a Contact Form 7', 'concept'),
    'choices' => $forms
  )
);
