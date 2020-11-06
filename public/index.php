<?php 

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLER",APP.'controllers'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);
require_once "../vendor/autoload.php";

// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","portfolio");
define("DATABASE_TYPE","mysql");
define("DOMIN_NAME","http://mvc.test/");



$app = new MVC\core\app();
