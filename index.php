<?php

session_start();

$_SESSION['CURRENT_POST_ID'] = null;
$_SESSION['UWU_CONFIGS'] = parse_ini_file('dist/.uwu');

// # Default Base URL (Preview)
$_SESSION['UWU_CONFIGS']['BASE_URL'] = 'http://' . $_SERVER['HTTP_HOST'] . '/preview/www/';

// # Root Path
define('DIR_ROOT', __DIR__);


// # Return data from .uwu
function uwu($name) {
	return $_SESSION['UWU_CONFIGS'][$name];
}

// # Init
require_once("core/Main.php");
require_once("core/App.php");
require_once("core/helper/Content.php");

new Main();

// var_dump($_SESSION);