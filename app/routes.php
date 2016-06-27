<?php
use Core\Router;
use Core\Viewer;

/**
 * Route GET / to home.php 
 */
Router::get('/', function() {
	Viewer::file('home.php');
});

/**
 * Lazy routing
 */
Router::get('/(:any)', function($match) {
	Viewer::file($match);
});