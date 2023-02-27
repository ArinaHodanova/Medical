<?
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

/**Получаем URL главной страницы */
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}" . '<br>';
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);//url сайта
define("ADMIN", PATH . '/admin');//путь к админке 

require_once ROOT . '/vendor/autoload.php';
?>