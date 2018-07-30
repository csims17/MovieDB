<?php


/*
require_once HELPER_PATH . 'RegexRouter.php';
$router = new RegexRouter();

$router->route('/^\/movies\/(\w+)\/(\d+)\/?$/', function($category, $id){
    print "category={$category}, id={$id}";
 });
$router->route('/^\/movies\/(\w+)\/(\d+)\/?$/', function($category, $id){
    print "category={$category}, id={$id}";
 });
$router->execute($_SERVER['REQUEST_URI']);
*/
	//create get and post methods

	// fix the routing so that this directly compares uri's not exploding them into array
	// set the controller and the action depending on the get and post request
	$uri = $_SERVER['REQUEST_URI'];
	$request_uri = explode('/', $_SERVER['REQUEST_URI']);

 	$controller;
	$action;
	$p_key = null;


/*
	if 		($uri == '/home') 							{	$controller = 'Index';			$action = 'index'; }
	elseif 	($uri == '/movies') 						{	$controller = 'Movies';			$action = 'index'; }
	elseif 	(preg_match('/movies/\S*',$uri, $p_key)) 	{	$controller = 'Movies';			$action = 'index'; }
	elseif 	($uri == '/home') 							{}
	else 												{	$controller = 'Index';			$action = 'error'; }

	switch ($uri) {
		case '/home':						break;
		case '/movies':			$controller = 'Movies';			$action = 'index';			break;
		case '/movies/$p_key':	$controller = 'Movies';			$action = 'show';	$p_key = 		break;
		
		default:
			# code...
			break;
	}
*/

	switch ($request_uri[1]) {
		case 'home':
			$controller = 'Index';
			$action 	= 'index';
			break;
		
		case 'movies':
			//if (count($request_uri) == 2) {
				$controller = 'Movie';
				$action 	= 'index';
			//}
			/*
			elseif (count($request_uri) == 4) {
				$controller = 'Movie';
				$action 	= 'show';
				$p_key 		= $request_uri[3];
			}
*/
			break;

		case 'login':
			$controller = 'User';
			$action 	= 'login';
			break;

		case 'users':
			$controller = 'User';
			$action 	= 'index';
			break;

		default:
			$controller = 'Index';
			$action 	= 'error';
			break;
	}

	define("CONTROLLER", $controller);  
	define("ACTION", 	 $action);
	define("P_KEY", 	 $p_key);

?>
