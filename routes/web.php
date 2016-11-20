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
Router::get('', function() {
	Viewer::file('resources/views/home.php');
});

/*
|--------------------------------------------------------------------------
| Lazy Routing - Route GET /(:any) into /(:any).php
|--------------------------------------------------------------------------
|
| This is to demonstrate wildcard routing, which allows you to route any
| URI into any file.
|
*/
Router::get('(:any)', function($match) {
	Viewer::file('resources/views/' . $match);
});