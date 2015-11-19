<?php if (!defined('FW')) die('Forbidden');

/** @internal */
function _filter_disable_default_shortcodes($to_disable){
  $list = array('accordion', 'button', 'calendar', 'call_to_action', 'icon', 'media_video', 'media_image', 'icon_box', 'notification', 'widget_area', 'table', 'map', 'contact_form');
  return array_merge($to_disable, $list);
}

add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_disable_default_shortcodes');

if (is_admin()) {
  include fw_get_template_customizations_directory() . '/includes/option-types.php';
}
