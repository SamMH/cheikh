<?php

session_start();

$is_admin = explode('/', $_GET['p'])[0];
if(($is_admin == "admin") && (!isset($_SESSION['login']) || empty($_SESSION['login']))):
	$_GET['p'] = "admin";
endif;

$params = explode('/', $_GET['p']);

$controller = (isset($params[0]) && $params[0] != "") ? $params[0] : 'home';
$action = isset($params[1]) ? $params[1] : 'index';

//Definition des constantes
define("WEBROOT", str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define("ROOT", str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'core/includes.php');

// Page different que admin
if( $controller!="admin" ):

	require_once(WEBROOT."controllers/$controller.php");
	$myController = new $controller();
	if (method_exists($myController, $action)):
	    unset($params[0]);
		unset($params[1]);
	    call_user_func_array(array($myController, $action), $params);
	else:
	    call_user_func_array(array($myController, 'index'), $params);
	endif;

else:

	if (isset($params[1]) && $params[1] == "logout"):
		unset($_SESSION['login']);
		header("Location: ".WEBROOT);
		die();
	endif;
	if(!isset($_SESSION['login']) || empty($_SESSION['login'])):

		$controller = "admin";
		unset($params[1]);
		$action = "login";
		require_once(WEBROOT."controllers/admin.php");

	else:

		if( count($params) > 2 ):

			
			$controller = $params[1]."Admin";
			$action = $params[2];
			require_once(WEBROOT."controllers/admin/". $params[1].".php");

		elseif( count($params)==2 ):

			
			$controller = $params[1]."Admin";
			$action = "index";
			require_once(WEBROOT."controllers/admin/". $params[1].".php");

		elseif( count($params)==1 ):

			require_once(WEBROOT."controllers/". $params[0].".php");

		endif;
	endif;

	$myController = new $controller;
	if (method_exists($myController, $action)):
	    unset($params[0]);
		unset($params[1]);
		unset($params[2]);
	    call_user_func_array(array($myController, $action), $params);
	else:
	    call_user_func_array(array($myController, $action), $params);
	endif;

endif;