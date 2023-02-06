<?php
declare(strict_types=1);

define('APP_START',microtime(true));

define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . DS . 'app');
define('PUBLIC_PATH', BASE_PATH . DS . 'public');
define('VIEWS_PATH', BASE_PATH . DS . 'views');
define('STORAGE_PATH', BASE_PATH . DS . 'storage');
?>