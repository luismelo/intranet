<?php
// If uninstall not called from WordPress exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

$option_name = 'jsm_custom_login_options';

// Delete options
delete_option( $option_name );

// For site options in multisite
delete_site_option( $option_name );  
?>