<?
namespace app\controllers;

use app\models\Product;
use app\models\Breadcrumbs;
use app\models\Tabsproduct;

class ProductController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product) {
            throw new \Exception('Страница не найдена', 404);
        }

        //получить бренд товара
        $brand = \R::findOne('brand', "id = ?", [$product->brand_id]);
        
        //преимущества товара
        $advantage = \R::findAll('advantage');

        //хлебные крошки
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

        //связанные товары
        $related = \R::getAll("SELECT * FROM related_prod JOIN product ON product.id = related_prod.related_id WHERE related_prod.product_id = ?", [$product->id]);

        $brand_rel = \R::findAll('brand');
        $categories = \R::findAll("category");
        
        //запись в куки просмотренного товара
        $p_modal = new Product();
        $p_modal->setRecentlyViewed($product->id);

        //просмотренного товара из куки
        $get_viewed = $p_modal->getRecentlyViewed();
        $recently_viewed = null;
        if($get_viewed) {
            $recently_viewed = \R::find('product', 'id IN ('. \R::genSlots($get_viewed) . ') LIMIT 6' , $get_viewed);
        }

        //галлерея
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);

        //все модификации данного товара

        //табы продукта
        $reviews_product = \R::findAll('reviews_product', 'id_product = ?', [$product->id]);
        $tabs = \R::findAll('tabs_product', 'id_product = ?', [$product->id]);
        $documen_product = \R::findAll('documen_product', 'id_product = ?', [$product->id]);
        $tabsproduct = Tabsproduct::getProduct($product->id, $product->content, $product->specifications, $tabs, $reviews_product, $documen_product);
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'brand', 'advantage', 'related', 'brand_rel', 'categories', 'gallery', 'recently_viewed', 'breadcrumbs', 'tabsproduct'));
    }
}
?>