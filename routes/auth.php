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
| Login and Registration Page
|--------------------------------------------------------------------------
|
| This will display the login and register page respectively
|
*/
Router::get('/login', 'auth/login');
Router::get('/register', 'auth/register');

/*
|--------------------------------------------------------------------------
| Login Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller to manage authentication
|
*/
Router::post('/login', 'Controller\Auth@authenticate');
Router::post('/register', 'Controller\Auth@register');
Router::get('/logout', 'Controller\Auth@logout');
