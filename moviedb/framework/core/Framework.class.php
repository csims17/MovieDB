<?php
// framework/core/Framework.class.php

class Framework {


	public function run() {

		//$uri = $_SERVER['REQUEST_URI'];
		// $uri;
		//phpinfo();

		//echo "run()";
		self::init();
		//echo '<p>init finished</p>';

		self::autoload();
		//echo '<p>autoload finished</p>';

		//self::dispatch();
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
		

    	// Load core classes
		require CORE_PATH . "Controller.class.php";
		require CORE_PATH . "Loader.class.php";
		require DB_PATH   . "Mysql.class.php";
		require CORE_PATH . "Model.class.php";

    	// Load configuration file
		$GLOBALS['config'] = include CONFIG_PATH . "config.php";

		define("URL_ROOT", 		  		$GLOBALS['config']['ROOT_URI'] . "index.php/");
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
			$parameters = PARAMETERS;
			if (count($parameters) > 0) {
				//echo "<pre>";
				//print_r($parameters);
				//echo "</pre>";
				$controller->$action_name($parameters);
			}
			else {
				$controller->$action_name();
			}
			
		} catch (Exception $e) {
			include CURR_VIEW_PATH . "404.php";

		}
		//var_dump(get_defined_constants());
	}
}