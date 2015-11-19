<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'cp_register_required_plugins');
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function cp_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
      array(
        'name'               => 'Redux Framework for Concept', // The plugin name.
        'slug'               => 'redux-for-concept', // The plugin slug (typically the folder name).
        'source'             => 'https://dl.dropboxusercontent.com/s/7kcwtvbknesg1tm/redux-for-concept.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
        'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
      ),
      array(
        'name'               => 'Unyson', // The plugin name.
        'slug'               => 'unyson', // The plugin slug (typically the folder name).
        'source'             => 'https://dl.dropboxusercontent.com/s/aduvv0rt25r9u24/unyson.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
      ),
      array(
        'name'      => 'Contact Form 7',
        'slug'      => 'contact-form-7',
        'required'  => false,
        ),
      );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

tgmpa( $plugins, $config );

}

?>
