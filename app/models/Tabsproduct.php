<?
namespace app\models;

use ishop\App;

class Tabsproduct { 
    public static $arr_prod = [];

    /** 
     * Формируем таб с описанием
    */
    public static function getProduct($id, $content = null, $specifications = null, $tabs, $reviews = null, $documen = null) {

      foreach($tabs as $k => $v) {
          if(isset($content) && !empty($v->content)) {
            self::$arr_prod[] = ['name' => $v->content, 'content' => $content];
          }
          if(isset($specifications) && !empty($v->specifications)) {
            self::$arr_prod[] = ['name' => $v->specifications, 'content' => $specifications];
          }
          if((count($documen) > 0) && !empty($v->documen)) {
            self::$arr_prod[] = ['name' => $v->documen, 'documen' => $documen];
          }
          if((count($reviews) > 0) && !empty($v->reviews)) {
            self::$arr_prod[] = ['name' => $v->reviews, 'reviews' => $reviews];
          }
      }
      return self::$arr_prod;
    }
}

?>