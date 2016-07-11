<?php
/*
|--------------------------------------------------------------------------
| The Basic Routes - Route GET / into /home.php
|--------------------------------------------------------------------------
|
| Requests from / will be served by the file /home.php. You can also put
| view files (home.php) into any directory within the project.
|
*/
Router::get('/', function() {
	Viewer::file('home.php');
});

/*
|--------------------------------------------------------------------------
| Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller with Damn Stupid Simple framework
| Try to go to /hello or /hello/yourname and see what it shows
|
*/
Router::get('/hello', 'Controller\Hello@greetWorld');
Router::get('/hello/(:any)', 'Controller\Hello@greetWithName');

/*
|--------------------------------------------------------------------------
| Lazy Routing - Route GET /(:any) into /(:any).php
|--------------------------------------------------------------------------
|
| This is to demonstrate wildcard routing, which allows you to route any
| URI into any file.
|
*/
Router::get('/(:any)', function($match) {
	Viewer::file($match);
});