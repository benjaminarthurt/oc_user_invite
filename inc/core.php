<?php
/**
* core functions for site operations
*/

class core {
  
  public $_settings;
  public $_theme;
  
  public function __construct()
  {
      //load settings from config file
      include_once 'config/config.php';
      $this->_settings = $config;
      $this->_theme = (!is_null($this->_settings['theme']) ? 'theme/' . $this->_settings['theme'] . '/' : 'theme/custom/' );
      //establish DB connection
  }
  public function __destruct()
  {
      //close DB
  }
  
  public function render() {
    echo $this->header();
    echo $this->navigation();
    echo $this->body();
    echo $this->footer();
  }
  public function header() {
    include $this->_theme . 'defaults/header.php';
    echo $this->_settings['sitename'];
  }
  public function navigation() {
    echo '<br>nav';
  }
  public function footer() {
    echo 'footer';
  }
  public function body() {
    echo '<p>body</p>';
  }

}