<?php
/*
Plugin Name: Redux Framework for Concept
Plugin URI: http://codepark.co/
Description: Theme Options Framework for "Concept" Theme
Version: 1
Author: CodePark
Author URI: http://codepark.co
License URI: http://www.gnu.org/licenses/gpl.html
*/

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxCore/framework.php' ) ) {
  require_once( dirname( __FILE__ ) . '/ReduxCore/framework.php' );
}
