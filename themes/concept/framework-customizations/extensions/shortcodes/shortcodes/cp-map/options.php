<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$map_shortcode = fw_ext('shortcodes')->get_shortcode('map');
$options = array(
  'lat' => array(
    'type' => 'text',
    'label' => __('Map Latitude', 'concept'),
    'desc'  => __('Find your Latitude and Longitude <a target="blank" href="http://www.latlong.net/">here</a>.', 'concept')
  ),
  'lng' => array(
    'type' => 'text',
    'label' => __('Map Longitude', 'concept'),
    'desc'  => __('Find your Latitude and Longitude <a target="blank" href="http://www.latlong.net/">here</a>.', 'concept')
  ),
  'address' => array(
    'type' => 'text',
    'label' => __('Address', 'concept'),
    'attr'  => array(
      'placeholder' => __('e.g: Park Place, New York', 'concept')
    )
  ),
	'phone' => array(
		'type' => 'text',
		'label' => __('Phone Number', 'concept')
	),
	'mail' => array(
		'type' => 'text',
		'label' => __('Email Address', 'concept')
	)
);
