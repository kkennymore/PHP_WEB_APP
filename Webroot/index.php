<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'Apps'.DS.'Views');
require_once(ROOT.DS.'Apps'.DS.'Lib'.DS.'init.php');

App::run($_SERVER['REQUEST_URI']);
