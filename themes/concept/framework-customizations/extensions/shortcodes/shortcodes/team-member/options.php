<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
  'image' => array(
    'label' => __( 'Image', 'concept' ),
    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'concept' ),
    'type'  => 'upload'
  ),
  'name'  => array(
    'label' => __( 'Name', 'concept' ),
    'desc'  => __( 'Name of the person', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'job'   => array(
    'label' => __( 'Job Title', 'concept' ),
    'desc'  => __( 'Job title of the person.', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'twitter'  => array(
    'label' => __( 'Twitter URL', 'concept' ),
    'desc'  => __( 'Enter the Twitter URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'facebook'  => array(
    'label' => __( 'Facebook URL', 'concept' ),
    'desc'  => __( 'Enter the Facebook URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'dribbble'  => array(
    'label' => __( 'Dribbble URL', 'concept' ),
    'desc'  => __( 'Enter the Dribbble URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'linkedin'  => array(
    'label' => __( 'Linkedin URL', 'concept' ),
    'desc'  => __( 'Enter the Linkedin URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'instagram'  => array(
    'label' => __( 'Instagram URL', 'concept' ),
    'desc'  => __( 'Enter the Instagram URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  ),
  'google_plus'  => array(
    'label' => __( 'Google Plus URL', 'concept' ),
    'desc'  => __( 'Enter the Google Plus URL', 'concept' ),
    'type'  => 'text',
    'value' => ''
  )
);
