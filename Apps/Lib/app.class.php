<?php
class App{
	protected static $router;
	
	public static $db;
	
	public static function getRouter(){
		return self::$router;
	}
	public static function run($uri){
		self::$router = new Router($uri);
		self::$db = new DB(Config::get('DB_TYPE'),Config::get('DBHOST'),Config::get('DBUSER'),Config::get('DBPASS'),Config::get('DBNAME'),Config::get('DB_CHARSET'));
		Lang::load(self::$router->getLanguage());
		$controller_class = ucfirst(self::$router->getController()).'Controller';
		$controller_method = strtolower(self::$router->getMethodPrefix().self::$router->getAction());
		//calling controller method
		$controller_object = new $controller_class();
		if(method_exists($controller_object,$controller_method)){
			//controller's action may return a view path
			$view_path = $controller_object->$controller_method();
			$view_object = new View($controller_object->getData().$view_path);
			$content = $view_object->render();
		}else{
			throw new Exception('The requested file path does not exist in path: ');
		}
		
		$layout = self::$router->getRoute();
		$layout_path = VIEWS_PATH.DS.$layout.'.php';
		
		$layout_view_object = new View(compact('content'), $layout_path);
		echo $layout_view_object->render();
	}
}
