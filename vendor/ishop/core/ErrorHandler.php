<?
namespace ishop;

class ErrorHandler {
  public function __construct() {
    if(DEBUG) {
        error_reporting(-1);
    } else {
        error_reporting(0);
    }
    set_exception_handler([$this, 'exceptionHandler']);
  }

  public function exceptionHandler($exception) {
    $this->logErrors($exception->getMessage(), $exception->getFile(), $exception->getLine());
    $this->displyError('Exception', $exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getCode());
  }

  protected function logErrors($message = '', $file = '', $line = '') {
    error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл {$file} | Строка: {$line} <br>", 3, ROOT . '/tmp/errors.log');
  }

  protected function displyError($errornum, $errorstr, $errorfile, $errorline, $responce = 404) {
    http_response_code($responce);
    if($responce == 404 && !DEBUG) {
        require WWW . '/errors/404.php';
      die;
    }
    if(DEBUG) {
        require WWW . '/errors/dev.php';
    } else {
        require WWW . '/errors/prod.php';      
    }
    die;
  }

}
?>