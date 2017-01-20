<?php
/**
 * Damn Stupid Simple - A PHP Framework For Lazy Developers
 * 
 * @package		Damn Stupid Simple
 * @author		Studio Nexus <fariz@studionexus.co>
 * @copyright	2016 Studio Nexus
 * @license		MIT
 * @version		Release: 0.3.0
 * @link		https://www.studionexus.co/php/damnstupidsimple
 */

/*
|--------------------------------------------------------------------------
| Register the Autoloader
|--------------------------------------------------------------------------
|
| Composer is our best friend. He maintains our dependencies and manage
| the autoloader very well. Good guy Composer.
|
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Register the Environment Variables
|--------------------------------------------------------------------------
|
| Reads the config file (config/env.php) and register it in using the
| putenv() function. Configurations are retreivable using the getenv() 
| function everywhere in the project.
|
*/
Core\Config::setEnv();

/*
|--------------------------------------------------------------------------
| Register the Error Handler
|--------------------------------------------------------------------------
|
| The debugging tool will register the error handler based on your
| configuration (located at config/env.php). 
|
*/
Core\Debugger::start();