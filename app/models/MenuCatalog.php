<?php
namespace app\models;

class MenuCatalog extends AppModel { 
    protected $data;//массив с данными
    protected $tree;//массив дерева с данными
    protected $menuHtml;
    protected $table = 'category';//таблица в БД
   
    public function __construct() {
        $this->run();
        $this->getTreeMenu();
    }

    //Запускает все методы
    protected function run() {
        $this->data = \R::getAssoc("SELECT * FROM {$this->table}");
        $this->tree = $this->getTree();//массив дерева 
    }

    public function getTreeMenu() {
        return $this->tree;
    }

    /*
      Parameters: 
      Desctiptiop: формируем дерево (дочерний элементр внутри родителя)
      Return value: arr
    */
    protected function getTree() {  
        $tree = [];
        $data = $this->data;
        foreach($data as $id =>&$node) {
          if(!$node['parent_id']) {
              $tree[$id] = &$node;
          } else {
              $data[$node['parent_id']]['childs'][$id] = &$node;
          }
        }
        return $tree;
    }

    /*
      Parameters: 
        array: дерево
        string:
      Desctiptiop: получаем HTML
      Return value: string
    */
    protected function getMenuHtml($thee, $tab = '') {
        $str = '';
        foreach($thee as $id => $category) {
            $str .= $this->catToTemplate($category, $tab, $id);
        }
        return $str;
      }

    /*
      Parameters: 
        array: $category
        num: $tab
        num: $id
      Desctiptiop: 
      Return value: 
    */
    protected function catToTemplate($category, $tab, $id) {
        ob_start();
        return ob_get_clean();
    }
}