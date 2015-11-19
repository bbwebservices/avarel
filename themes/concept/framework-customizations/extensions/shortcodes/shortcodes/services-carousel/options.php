<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
  'services' => array(
    'type'  => 'addable-box',
    'value' => array(
      array(
        'percentage' => 50,
        'name' => '',
      )
    ),
    'label' => __('Services', 'concept'),
    'box-options' => array(
      'name' => array( 'type' => 'text', 'label' => __('Name', 'concept') ),
      'icon' => array( 'type' => 'my-icon', 'label' => __('Icon', 'concept') ),
      'text_one' => array('type' => 'textarea', 'label' => __('First Column Text', 'concept')),
      'text_two' => array('type' => 'textarea', 'label' => __('Second Column Text', 'concept'))
    ),
    'template' => 'Service',
    'limit' => 0,
  )
);
