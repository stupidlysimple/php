<?php
/**
 * Damn Stupid Simple - A PHP Framework For Lazy Developers
 *
 * @package		Damn Stupid Simple
 * @author		Studio Nexus <fariz@studionexus.co>
 * @copyright	2016 Studio Nexus
 * @license		MIT
 * @version		Release: 0.1.1
 * @link		https://www.studionexus.co/php/damnstupidsimple
 */
include(DSS_PATH.'app/routes.php');

/*
|--------------------------------------------------------------------------
| Creating the Singleton
|--------------------------------------------------------------------------
|
| Damn Stupid Simple uses the Singleton to simplify coordinations, while
| maintaining only one instantiation of a class.
|
*/
$app = new Core\App;

/*
|--------------------------------------------------------------------------
| Linking to the Database Connector
|--------------------------------------------------------------------------
|
| Connect the database for only once. Save the planet.
|
*/
$app->link('database', Core\Database::connect());

/*
|--------------------------------------------------------------------------
| Starting the Caching Engine
|--------------------------------------------------------------------------
|
| This is our favourite part. Minimize the resource usage, maximize our
| capabilities.
|
*/
$app->link('cachemanager', Core\Cache::init());

/*
|--------------------------------------------------------------------------
| Share the Singleton $app with the Template Files
|--------------------------------------------------------------------------
|
| Eliminate complexity, get the job done.
|
*/
Core\Sharer::share('app', $app);

/*
|--------------------------------------------------------------------------
| Dispatch the Router
|--------------------------------------------------------------------------
|
| Ta Da! We can see something now!
|
*/
Core\Router::dispatch();

/*
|--------------------------------------------------------------------------
| Display the Execution Time
|--------------------------------------------------------------------------
|
| Show the time taken to complete execution up till this far. (See the file
| config/env.php)
|
*/
if(getenv('SHOW_EXECUTION_TIME')){
	Core\Debugger::exec_time();	
}