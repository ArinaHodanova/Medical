<?php
namespace app\models;

class Product extends AppModel {

    /**
      * добавление просмотренных товаров
      * number $id - id товара
      * return array
    */
    public function setRecentlyViewed($id) {
        //все товары, которые есть в куках, которые когда либо смотрел пользователь
        $recentlyViewed = $this->getAllRecentlyViewed();

        //если товара нет, то записываем его в куки
        if(!$recentlyViewed) {
            setcookie('recentlyViewed', $id, time() + 3600*24, '/');
        } else {
            $recentlyViewed = explode('.', $recentlyViewed);
            if(!in_array($id, $recentlyViewed)) {
              $recentlyViewed[] = $id;
              $recentlyViewed = implode('.', $recentlyViewed);
              setcookie('recentlyViewed', $recentlyViewed, time() + 3600*24, '/');
            }
        }
    }

    /**
      * получение просмотренных товаров
    */
    public function getRecentlyViewed() {
        if(!empty($_COOKIE['recentlyViewed'])) {
            $recentlyViewed = $_COOKIE['recentlyViewed'];
            $recentlyViewed = explode('.', $recentlyViewed);
            return array_slice($recentlyViewed, -6);
        }
        return false;
    }

    /**
      * получение всех просмотренных товаров
    */
    public function getAllRecentlyViewed() {
        if(!empty($_COOKIE['recentlyViewed'])) {
          return $_COOKIE['recentlyViewed'];
        } 
        return false;
    }
}
?>