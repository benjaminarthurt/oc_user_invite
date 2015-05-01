<?php
/**
* Default Page - Bootstraps site
*/

//Display errors during dev
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

if (file_exists("config/config.php")) {
  $site = new core;

  $site->render();

  unset($site);
}
else {
die('This system has not been setup yet.');
}

function __autoload($class_name)
  {
      include_once 'inc/' . $class_name . '.php';
  }
