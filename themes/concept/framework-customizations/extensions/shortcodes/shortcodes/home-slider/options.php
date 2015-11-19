<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
  'home_slider' => array(
    'type'  => 'addable-box',
    'value' => array(
        array(
            'image' => '',
            'title' => '',
        )
    ),
    'label' => __('Home Slider', 'concept'),
    'box-options' => array(
        'image' => array( 'type' => 'upload', 'images_only' => true ),
        'title' => array( 'type' => 'text' ),
        'text' => array( 'type' => 'text' ),
        'button_text' => array( 'type' => 'text' ),
        'button_url' => array( 'type' => 'text' ),
        'text_color'  => array(
          'type'  => 'select',
          'choices' => array(
            'dark' => 'Dark',
            'light' => 'Light'
          )
        ),
    ),
    'template' => 'Slide',
    'box-controls' => array(
        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
    ),
    'limit' => 0,
  )
);
