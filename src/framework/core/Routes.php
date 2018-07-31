<?php

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

		// remove last element of array if it is empty. 
		// this is in case the user has an extra / at the end of url
		if (count($info) > 1) {
			if ($info[count($info)-1] == "") {
				array_pop($info);
			}
		}
		//echo "<p> in for loop count($info)= ". count($info) . "</p>";
		break;
	}
}
//echo "<p>count($info)= ". count($info) . "</p>";
//for ($i=0; $i < count($info); $i++) { 
	//echo "<p>info[". $i . "] = " . $info[$i] . "</p>";
//}

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

?>
