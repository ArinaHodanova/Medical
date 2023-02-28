<?
namespace app\controllers;

class CartController extends AppController { 

    public function addAction() {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $gty = !empty($_GET['gty']) ? (int)$_GET['gty'] : null;
        echo $id . ' ' . $gty;
        die;
    }

}