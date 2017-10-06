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
use Simplyfier\Alias;
use Simplyfier\Cache;
use Simplyfier\Database;
use Simplyfier\Debugger;
use Simplyfier\DI\Container;
use Simplyfier\DI\Sharer;
use Simplyfier\Http\Router;
use Simplyfier\Service;
use Simplyfier\TimeTrackr;

/*
|--------------------------------------------------------------------------
| Setup Aliases
|--------------------------------------------------------------------------
|
| Reads the configuration file (config/aliases.php) and create aliases
|
*/
Alias::loadAliases();

/*
|--------------------------------------------------------------------------
| Set the default timezone
|--------------------------------------------------------------------------
|
| Reads the configuration file (config/datetime.php) and set timezone
|
*/
TimeTrackr::applyConfig();

/*
|--------------------------------------------------------------------------
| Creating the App Container
|--------------------------------------------------------------------------
|
| Create an app container to simplify coordination, while maintaining only
| one instantiation of a class. The app container is usable inside view
| files.
|
*/
$app = new Container();

/*
|--------------------------------------------------------------------------
| Linking to the Database Connector
|--------------------------------------------------------------------------
|
| Connect the database for only once. Save the planet.
|
*/
$app->put('database', Database::connect());

/*
|--------------------------------------------------------------------------
| Starting the Caching Engine
|--------------------------------------------------------------------------
|
| This is our favourite part. Minimize the resource usage, maximize our
| capabilities.
|
*/
$app->put('cachemanager', Cache::initialize());

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
| Store $app and $service into a hive accessible in the view files
|--------------------------------------------------------------------------
|
| Eliminate complexity, get the job done. Our Dependency Injection (DI) for
| the view files in here!
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
if (getenv('SHOW_EXECUTION_TIME')) {
    Debugger::exec_time();
}
