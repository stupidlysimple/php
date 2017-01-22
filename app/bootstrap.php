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
| Setup Aliases
|--------------------------------------------------------------------------
|
| Reads the configuration file (config/aliases.php) and create aliases
|
*/
Core\Alias::init();

/*
|--------------------------------------------------------------------------
| Set the default timezone
|--------------------------------------------------------------------------
|
| Reads the configuration file (config/datetime.php) and set timezone
|
*/
TimeTrackr::init();

/*
|--------------------------------------------------------------------------
| Creating the Singleton
|--------------------------------------------------------------------------
|
| Damn Stupid Simple uses the Singleton to simplify coordination, while
| maintaining only one instantiation of a class.
|
*/
$app = new App;

/*
|--------------------------------------------------------------------------
| Linking to the Database Connector
|--------------------------------------------------------------------------
|
| Connect the database for only once. Save the planet.
|
*/
$app->link('database', Database::connect());

/*
|--------------------------------------------------------------------------
| Starting the Caching Engine
|--------------------------------------------------------------------------
|
| This is our favourite part. Minimize the resource usage, maximize our
| capabilities.
|
*/
$app->link('cachemanager', Cache::init());

/*
|--------------------------------------------------------------------------
| Load Services
|--------------------------------------------------------------------------
|
| This is where all of your applications in /app/Service are loaded.
|
*/
$service = Service::loadServices();

/*
|--------------------------------------------------------------------------
| Share the Singleton $app and $service
|--------------------------------------------------------------------------
|
| Eliminate complexity, get the job done. Our Dependency Injection (DI) is
| here!
|
*/
Sharer::share('app', $app);
Sharer::share('service', $service);

/*
|--------------------------------------------------------------------------
| Dispatch the Router
|--------------------------------------------------------------------------
|
| Ta Da! We can see something now!
|
*/

Router::start();
Router::dispatch();

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
    Debugger::exec_time();
}
