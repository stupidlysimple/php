<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers.
 *
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 *
 * @link		https://stupidlysimple.github.io/
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
require __DIR__.'/../vendor/autoload.php';

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
Simplyfier\Config::setEnv();

/*
|--------------------------------------------------------------------------
| Register the Error Handler
|--------------------------------------------------------------------------
|
| The debugging tool will register the error handler based on your
| configuration (located at config/env.php).
|
*/
Simplyfier\Debugger::start();
