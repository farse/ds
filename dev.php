<?php 

define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

require_once 'includes/password.inc';


die();
menu_execute_active_handler();

?>