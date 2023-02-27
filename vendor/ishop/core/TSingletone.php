<?
namespace ishop;

trait TSingletone {

  private static $instance;

  public static function instance() {
    if(!isset(self::$instance)) {
      self::$instance = new self;
    }
    return self::$instance;
  }
}
?>