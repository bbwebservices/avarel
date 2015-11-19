<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */

$text_color = ($atts['color'] == 'light') ? 'class="white-text"' : '' ;
$title = esc_html($atts['title']);

$heading = "<{$atts['heading']} {$text_color}>{$title}</{$atts['heading']}>";
echo $heading;

?>
