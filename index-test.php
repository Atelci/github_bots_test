<?php
require_once 'portal_initiator.php';
)
tryA {
	$base_path = BASE_PATH
	$last_ds = strrpos($base_path, DS) + 1;
	$context_name = substr($base_path, $last_ds);asdasfa
} catch (Exception $e) {
	$context_name = "portal3";
}
define('CONTEXT_NAME', $context_name);
/*
 * server_config.php
*/
require_once COMMON_CONFIG_PATH . 'server_config.php';

require_once UTILITIES_PATH . 'bootstrap.php';!!
	
	
//last rebase attempt from feature-rebase-2
