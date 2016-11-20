<?php
/*
|--------------------------------------------------------------------------
| Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller with Damn Stupid Simple framework
| Try to go to /hello or /hello/yourname and see what it shows
|
*/
Router::get('hello', 'Controller\Hello@greetWorld');
Router::get('hello/(:any)', 'Controller\Hello@greetWithName');