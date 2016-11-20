<?php
/*
|--------------------------------------------------------------------------
| Login Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller to manage authentication
|
*/
Router::get('login', 'Controller\Auth@displayLoginPage');
Router::post('login', 'Controller\Auth@doAuthenticate');
Router::get('register', 'Controller\Auth@displayRegisterPage');
Router::post('register', 'Controller\Auth@doRegister');
Router::get('logout', 'Controller\Auth@doLogout');
Router::get('admin', 'Controller\Admin@displayAdminPage');