<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers
 *
 * @package		StupidlySimple
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 * @link		https://stupidlysimple.github.io/
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * PHP Unit Testing
 */
define('SS_PATH', realpath(dirname(__FILE__)) .'/../');
require SS_PATH . 'vendor/autoload.php';