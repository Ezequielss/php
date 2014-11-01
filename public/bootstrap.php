<?php 
ini_set("display_erros", 1);
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('America/Joao_Pessoa');

define('DS',DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(__DIR__.DS.'..'))
$composer_autoload =__DIR__.DS.'autoload.php'; 