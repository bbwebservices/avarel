<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
  'size' => array(
    'type' => 'select',
    'label' => __('Size', 'concept'),
    'choices' => array(
      'default' => 'Default',
      'small' => 'Small'
    )
  ),
  'centered' => array(
    'type'    => 'switch',
    'label'   => __('Centered', 'concept')
  )
);
