/**
* Default Page - Bootstraps site
*/

if (file_exists("config/config.php")) {
  require_once 'inc/core.php';
}
else {
die('This system has not been setup yet.');
}
