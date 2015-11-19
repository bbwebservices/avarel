<?php

// file: {theme}/inc/includes/option-types.php

/** @internal */
function _action_theme_include_custom_option_types() {
  if (is_admin()) {
    require_once dirname(__FILE__) . '/option-types/my-icon/class-fw-option-type-my-icon.php';
  }
}
add_action('fw_init', '_action_theme_include_custom_option_types', 9);
