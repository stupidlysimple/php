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
| Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller with Damn Stupid Simple framework
| Try to go to /hello or /hello/yourname and see what it shows
|
*/
Router::get('hello', function () {
    Viewer::file('resources/views/hello.php');
});
Router::get('hello/(:any)', 'Controller\Hello@greetWithName');
Router::post('hello', 'Controller\Hello@greetForm');
