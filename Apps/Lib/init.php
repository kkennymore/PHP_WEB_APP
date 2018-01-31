<?php

require_once(ROOT . DS . 'Apps' . DS . 'Config' . DS . 'config.php');
function __autoload($class_name) {
    $lib_path = ROOT . DS . 'Apps' . DS . 'Lib' . DS . strtolower($class_name) . '.class.php';
    $controller_path = ROOT . DS . 'Apps' . DS . 'Controllers' . DS . str_replace('controller', '', strtolower($class_name)) . '.controller.php';
    $model_path = ROOT . DS . 'Apps' . DS . 'Models' . DS . strtolower($class_name) . '.php';

    if (file_exists($lib_path)) {
        require_once($lib_path);
    } elseif (file_exists($controller_path)) {
        require_once($controller_path);
    } elseif (file_exists($model_path)) {
        require_once($model_path);
    } else {
        //pageRedirect('/');
        throw new Exception('The requested file path does not exist in path ' . $class_name);
    }
}

function __($key, $default_value = '') {
    return Lang::get($key, $default_value);
}

function fileIncludes($fileType, $fileName) {
    $includes_path_xhtml = ROOT . DS . 'Webroot' . DS . 'Includes' . DS . strtolower($fileName) . '.xhtml';
    $includes_path_html = ROOT . DS . 'Webroot' . DS . 'Includes' . DS . strtolower($fileName) . '.html';
    $includes_path_php = ROOT . DS . 'Webroot' . DS . 'Includes' . DS . strtolower($fileName) . '.php';
    if (strtolower($fileType) == "php" && file_exists($includes_path_php)) {
        require_once($includes_path_php);
    } elseif (strtolower($fileType) == "html" && file_exists($includes_path_html)) {
        require_once($includes_path_xhtml);
    } elseif (strtolower($fileType) == "xhtml" && file_exists($includes_path_xhtml)) {
        require_once($includes_path_xhtml);
    } else {
        throw new Exception('The requested file path does not exist in path ' . $fileName);
    }
}
function convertArrayToObject($array) {
        return (object) $array;
    }

    function convertObjectToArray($object) {
        return (array) $object;
    }

    function convertObjToString($object) {
        return serialize($object);
    }

    function convertStringToObj($String) {
        return unserialize($String);
    }

    function pageRedirect($location) {
        return header("Location: $location");
    }

    function urlArrayPos($number) {
        $strings = $language_url = explode('/', $_SERVER['REQUEST_URI']);
        return isset($strings[$number]) ? $strings[$number] : '';
    }

    function urlArray() {
        $strings = $language_url = explode('/', $_SERVER['REQUEST_URI']);
        return isset($strings) ? $strings : '';
    }