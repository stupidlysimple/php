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
| The Basic Routes - Route GET / into /home.php
|--------------------------------------------------------------------------
|
| Requests from / will be served by the file /home.view.php. You can also put
| view files (home.view.php) into any directory within the project.
|
*/
Router::get('/', 'home');

/*
|--------------------------------------------------------------------------
| Controller & HTTP Middleware Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller and Middleware with
| StupidlySimple framework. Try to go to /hello or /hello/yourname and see
| what it shows.
|
| Middleware is about how our application responds to incoming requests.
| Middleware look into the incoming request, and make decisions based on
| this request. We can build entire applications only using middleware.
|
| In this example, the hello middleware will demonstrate filtering a
| request, which is the /route/to/be/filtered. Try to go to the url and
| see what happen.
|
*/
Router::group('Middleware\Hello@filter', function () {
    Router::get('/hello', 'hello');
    Router::get('/hello/(:any)', 'Controller\Hello@greetWithName');
    Router::post('/hello', 'Controller\Hello@greetForm');
    Router::get('/route/to/be/filtered', 'hello');
});

/*
|--------------------------------------------------------------------------
| Administrator Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using group with the authentication checker. The
| middleware will intercept the HTTP request if the user is not logged in.
|
*/
Router::group('Controller\Auth@check', function () {
    Router::get('/admin', 'admin/home');
    Router::post('/updateuser', 'Controller\User@editUser');
    Router::get('/deleteuser', 'Controller\User@deleteUser');
});

/*
|--------------------------------------------------------------------------
| Lazy Routing - Route GET /(:any) into /resources/views/(:any).view.php
|--------------------------------------------------------------------------
|
| Ever wondered where's the rest of the routes is defined? It is in here,
| the wildcard route.
|
| This is to demonstrate wildcard routing, which allows you to route any
| URI into any of the view files.
|
| The lazy routing must be put at the end of the file or it will override
| other route declarations.
|
*/
Router::get('/(:any)', function ($match) {
    Viewer::file($match);
});
