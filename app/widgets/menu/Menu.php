<?
namespace app\widgets\menu;

use ishop\Cache;
use ishop\App;

class Menu {
    protected $data;
    protected $tree;//массив дерева из данных
    protected $menuHtml;
    protected $tpl; //шаблон меню
    protected $container;
    protected $table = 'category';//таблица в БД
    protected $cache = 3600;
    protected $cacheKey = 'ishop_menu';
    protected $attrs = [];
    protected $prepend = '';
    protected $class = '';

    public function __construct($options = []) {
        $this->tpl =  __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
        $this->run();
    }

    //получаем опции
    protected function getOptions($options) {
        foreach($options as $k => $v) {
            if(property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }

    //формируем меню
    protected function run() {
        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);
        if(!$this->menuHtml) {
            $this->data = App::$app->getProperty('cats');
            if(!$this->data) {
                $this->data = $cats = \R::getAssoc("SELECT * FROM {$this->table}");
            }
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);  
            if($this->cache) {
              $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
            }          
        }
        $this->output();
    }

    protected function output() {
      $attrs = '';
      if(!empty($this->attrs)) {
          foreach($this->attrs as $k => $v) {
            $attrs .= " $k='$v' ";
          }
      }
      echo "<{$this->container} class='{$this->class}' $attrs>";
        echo $this->prepend;
        echo $this->menuHtml;
      echo "</{$this->container}>";
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
        array; дерево
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

    protected function catToTemplate($category, $tab, $id) {
      ob_start();
      require $this->tpl;
      return ob_get_clean();
    }
}

?>