<?
namespace app\models;

use ishop\App;

class Breadcrumbs {
    /**
      * Получаем ХК
      * number id текущей категории
      * string название товара
    */
    public static function getBreadcrumbs($category_id, $title = "") {
        $cats = App::$app->getProperty('cats');
        $breadcrumbs_array = self::getParts($cats, $category_id);
        if(!empty($title)) {
          $breadcrumbs_array += ['title'=> $title];;
        }
        return $breadcrumbs_array;
    }

    /**
      * arr массив категорий
      * id текущей категории
      * return array 
    */
    public static function getParts($cats, $id) {
      if(!$id) return false;
      $breadcrumbs = [];
      foreach($cats as $k => $v) {
        if(isset($cats[$id])) {
          $breadcrumbs[$cats[$id]['alias']] = $cats[$id]['title'];
          $id = $cats[$id]['parent_id'];
        } else break;
      }
      return array_reverse($breadcrumbs, true);
    }

}

?>