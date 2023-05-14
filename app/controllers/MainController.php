<?
namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

  public function indexAction() {
    $advantage = \R::findAll('advantage');
    $product = \R::findAll('product');
    $brand = \R::findAll('brand');
    $hits_product = \R::findAll('product', "hit = '1' AND status = '1' LIMIT 8");
    $new_product = \R::findAll('product', "new = '1' AND status = '1' LIMIT 8");
    $discount_product = \R::findAll('product', "discount = '1' AND status = '1' LIMIT 8");
    $services_slider = \R::findAll('services_slider');
    $slider = \R::findAll('slider');
    $news = \R::findAll('news');
    $blog = \R::findAll('blog');
    $reviews = \R::findAll('reviews');

    $this->setMeta('Главная страница', 'Описание', 'Ключевики');
    $this->set(compact('advantage', 'brand', 'product', 'hits_product', 'new_product', 'discount_product', 'slider', 'reviews', 'news', 'blog', 'services_slider'));
  }
  
}

?>