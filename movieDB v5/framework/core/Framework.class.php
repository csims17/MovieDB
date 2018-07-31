<?php
// framework/core/Framework.class.php

class Framework {


	public function run() {

		$uri = $_SERVER['REQUEST_URI'];
		// $uri;
		//phpinfo();

		//echo "run()";
		self::init();
		//echo '<p>init finished</p>';

		self::autoload();
		//echo '<p>autoload finished</p>';

		self::dispatch();
		//echo '<p>dispatch finished</p>';
	}


	// Initialization
	private function init() {

    	// Define path constants
		define("DS", 			  DIRECTORY_SEPARATOR);
		define("ROOT", 			  getcwd() . 					 DS);
		
		define("APP_PATH", 		  ROOT . 'application' . 		 DS);
		define("FRAMEWORK_PATH",  ROOT . "framework" . 			 DS);
		define("PUBLIC_PATH", 	  ROOT . "public" . 			 DS);

		define("CONFIG_PATH", 	  APP_PATH . "config" . 		 DS);
		define("CONTROLLER_PATH", APP_PATH . "controllers" . 	 DS);
		define("MODEL_PATH", 	  APP_PATH . "models" . 		 DS);
		define("VIEW_PATH", 	  APP_PATH . "views" . 			 DS);

		define("CORE_PATH", 	  FRAMEWORK_PATH . "core" . 	 DS);
		define('DB_PATH', 	 	  FRAMEWORK_PATH . "database" .  DS);
		define("LIB_PATH", 		  FRAMEWORK_PATH . "libraries" . DS);
		define("HELPER_PATH", 	  FRAMEWORK_PATH . "helpers" . 	 DS);
		define("UPLOAD_PATH", 	  PUBLIC_PATH .    "uploads" . 	 DS);


		define("CURR_CONTROLLER_PATH", 	CONTROLLER_PATH . DS);
		define("CURR_VIEW_PATH", 		VIEW_PATH       . DS);
		


		$uri = $_SERVER['REQUEST_URI'];
		$request_uri = explode('/', $_SERVER['REQUEST_URI']);
		$info;
		//echo "<pre>";
		//print_r($request_uri);
		//echo "</pre>";
		//echo "<p>for begins</p>";
		//echo "<p>count($request_uri)= ". count($request_uri) . "</p>";
		for ($i=0; $i < count($request_uri); $i++) { 
			//echo "<p>request_uri[". $i . "] = " . $request_uri[$i] . "</p>";
			//echo "<p>request_uri[". $i . "] = " . $request_uri[$i] . "</p>";
			//echo "<p>request_uri[". $i . "] = " . $request_uri[$i] . "</p>";
			if ($request_uri[$i] == 'index.php') {
				//echo "index found at " . $i;
				$info = array_slice($request_uri, $i);
				//echo "<p> in for loop count($info)= ". count($info) . "</p>";
				break;
			}
		}
		//echo "<p>count($info)= ". count($info) . "</p>";
		for ($i=0; $i < count($info); $i++) { 
			//echo "<p>info[". $i . "] = " . $info[$i] . "</p>";
		}

		$controller;
		$action;
		$parameters = array();
		if (count($info) == 1) {
			$controller = 'Index';
			$action = 'index';
		}
		else {
			$controller = $info[1];
			$action = $info[2];			
			if (count($info) >= 3) {
				$parameters = array_slice($info, 3);
			}		
		}
		//echo "<p>controller= ". $controller . "</p>";
		//echo "<p>action= ". $action . "</p>";
		//echo "<p>parameters = </p>";
		//echo "<pre>";
		//print_r($parameters);
		//echo "</pre>";


		define("CONTROLLER", $controller);  
		define("ACTION", 	 $action);
		define("PARAMETERS", $parameters);

    	// Load core classes
		require CORE_PATH . "Controller.class.php";
		require CORE_PATH . "Loader.class.php";
		require DB_PATH   . "Mysql.class.php";
		require CORE_PATH . "Model.class.php";

    	// Load configuration file
		$GLOBALS['config'] = include CONFIG_PATH . "config.php";

		define("URL_ROOT", 		  		$config['ROOT_URI'] . "/index.php/");
   	 	// Start session
		session_start();
	}


	// Autoloading
	private static function autoload(){
		/*echo "<p>auto-load function called</p>";
    	echo "<pre>";
		print_r(array(__CLASS__,'load'));
		echo "</pre>";
*/
		// register given function as __autoload() implementation
		/* Example: array(__CLASS__,'load') returns
			Array
			(
			    [0] => Framework
			    [1] => load
			)
		*/
		spl_autoload_register(array(__CLASS__,'load'));
	}

	// Define a custom load method
	private static function load($classname){
		//echo "<p>load function called for " . $classname . "</p>";

    	// Here simply autoload app’s controller and model classes
		if (substr($classname, -10) == "Controller"){
    	    // Controller
			require_once CURR_CONTROLLER_PATH . "$classname.class.php";
		} 
		elseif (substr($classname, -5) == "Model"){
        	// Model
			require_once  MODEL_PATH . "$classname.class.php";
		}
	}

	// Routing and dispatching
	public static function dispatch(){

    // Instantiate the controller class and call its action method
		$controller_name = CONTROLLER . "Controller";
		$action_name 	 = ACTION . "Action";
		//echo $action_name;
		$controller 	 = new $controller_name;
		try {
			$controller->$action_name();
			
		} catch (Exception $e) {
			include CURR_VIEW_PATH . "404.php";

		}
		//var_dump(get_defined_constants());
	}
}