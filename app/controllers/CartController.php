<?
namespace app\controllers;

use app\models\Cart;

class CartController extends AppController { 

    public function addAction() {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $gty = !empty($_GET['gty']) ? (int)$_GET['gty'] : null;
        db($id);
        if($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            if(!$product) {
              return false;
            }
        }
        
        $cart = new Cart();
        $cart->addToCart($product, $gty);
        if($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
    }

}
?>