<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
  'project_options' => array(
    'context' => 'normal',
    'title'   => __('Project Options', 'concept'),
    'type'    => 'box',
    'options' => array(
      'steps' => array(
        'type'  => 'addable-popup',
        'label' => __('Project Steps', 'concept'),
        'popup-options' => array(
          'title' => array( 'type' => 'text' ),
          'text' => array( 'type' => 'textarea' ),
          'image' => array('type' => 'upload', 'images_only' => true)
        ),
        'template' => '{{- title }}',
        'limit' => 0,
      ),
      'description'  => array(
        'type'  => 'textarea',
        'label' => __('Description', 'concept')
      ),
      'client'  => array(
        'type'  => 'text',
        'label' => __('Client', 'concept')
      ),
      'url' => array(
        'type'  => 'text',
        'label' => __('Project Link', 'concept')
      ),
      'cover' => array(
        'type'  => 'upload',
        'images_only' => true,
        'label' => __('Cover Image', 'concept')
      )
    )
  )
);
