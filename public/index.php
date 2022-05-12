<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));


//inforurl
$host = ':9899';
define('WEB_MEDIA',  str_replace("\\","/",__DIR__));
define('WEB_PATH', 'http://'.$_SERVER['SERVER_NAME'].$host);
define('WEB_STATIC', 'http://'.$_SERVER['SERVER_NAME'].$host.'/static');
define('WEB_IMG', 'http://'.$_SERVER['SERVER_NAME'].$host.'/media/');
define('WEB_PUBLIC', 'http://'.$_SERVER['SERVER_NAME'].$host.'/public');

defined('APPLICATION_PATH') ||
        define('APPLICATION_PATH', __DIR__);
define("URL_UPLOAD", "/public");


// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
