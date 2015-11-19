<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
  'carousel' => array(
    'type'  => 'addable-option',
    'label' => __('Image', 'concept'),
    'option' => array( 'type' => 'upload', 'images_only' => true ),
  )
);
