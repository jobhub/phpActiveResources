<?php
require_once( "php_active_resource_base.php" );

class phpActiveResource extends phpActiveResourceBase{
  public $format = 'json';
  public $site = null;
  
  public $_find_uri = ":resource_name";
  public $_save_uri = ":resource_name";
  public $_delete_uri = ":resource_name";
  
  public function resource_name() {
    return strtolower( get_class( $this ) );
  }
}
?>