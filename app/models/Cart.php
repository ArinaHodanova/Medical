<?
namespace app\models;

use ishop\App;

class Cart extends AppModel { 

    public function addToCart($product, $qty = 1) {
        if(!isset($_SESSION['cart.currency'])) {
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        $id = $product->id;
        $title = $product->title;
        
        if(!empty($product->prise)) {
            $prise = $product->prise;
        } else {
            $prise = "Цена по запросу";
        }
      echo(gettype($prise));
        //добавить товар в сессию 
        if(isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$id] = [
              'qty' => $qty,
              'title' => $title,
              'alias' => $product->alias,
              'prise' => !empty($product->prise) ? $prise * $_SESSION['cart.currency']['value'] : "Цена по запросу",
              'img' => $product->img,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty: $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $_SESSION['cart.currency']['value'] : $qty * ($prise * $_SESSION['cart.currency']['value']);
    }
}