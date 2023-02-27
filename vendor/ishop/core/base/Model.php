<?
namespace ishop\base;

use ishop\Db;

abstract class Model { 
  public $attributes = [];//массив св-в модели, идентиченый полям в табл. БД
  public $errors = [];
  public $rules = [];//правила валидации данных

  public function __construct() {
    Db::instance(); 
  }
}

?>