<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
  'skills' => array(
    'type'  => 'addable-box',
    'value' => array(
      array(
        'percentage' => 50,
        'name' => '',
      )
    ),
    'label' => __('Skill Bars', 'concept'),
    'box-options' => array(
      'name' => array( 'type' => 'text' ),
      'percentage' => array( 'type' => 'slider' )
    ),
    'template' => 'Skill',
    'limit' => 0,
  )
);
