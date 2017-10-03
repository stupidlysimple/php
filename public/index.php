<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers
 *
 * @package		StupidlySimple
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 * @link		https://stupidlysimple.github.io/
 */

/*
|--------------------------------------------------------------------------
| Track the Pre-Execution Time
|--------------------------------------------------------------------------
|
| Get the time in microtime format for you to measure the awesomeness by
| Damn Stupid Simple framework.
|
*/
define('SS_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Use Full Paths for Better Performance
|--------------------------------------------------------------------------
|
| The full path starting from the index.php file. Improves performance (a
| bit)
|
*/
define('SS_PATH', realpath(dirname(__FILE__).'/../'));

/*
|--------------------------------------------------------------------------
| Include the Autoloader file
|--------------------------------------------------------------------------
|
| In this file we will register the Autoloader from Composer. Environment
| variables (that you set on config/env.php) will be registered this time. 
| Our sweet debugging tool will also be loaded to track errors as earlier
| as possible.
|
*/
require_once(SS_PATH.'/app/autoloader.php');

/*
|--------------------------------------------------------------------------
| Include the Bootstrap File
|--------------------------------------------------------------------------
|
| The bootstrapper will make sure that every services, like database, cache
| manager and routing runs perfectly well.
|
*/
require_once(SS_PATH.'/app/bootstrap.php');