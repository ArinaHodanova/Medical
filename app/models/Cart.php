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

        if(isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$id] = [
              'qty' => empty($qty) ? 1 : $qty,
              'title' => $title,
              'alias' => $product->alias,
              'prise' => ($prise !== "Цена по запросу") ? $prise * $_SESSION['cart.currency']['value'] : 'Цена по запросу',
              'img' => $product->img,
            ];
        }
        if($prise !== "Цена по запросу") {
            $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty: $qty;
            $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * ($prise * $_SESSION['cart.currency']['value']) : $qty * ($prise * $_SESSION['cart.currency']['value']);
        }
    }
}
?>