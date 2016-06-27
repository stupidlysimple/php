<?php
/**
 * Damn Stupid Simple - A PHP Framework For Lazy Developers
 *
 * Copyright (c) 2016 Studio Nexus
 *
 * Permission is hereby granted, free of charge, to any person obtaining a 
 * copy of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the 
 * Software is furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included 
 * in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS 
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY 
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * 
 * @package		Damn Stupid Simple
 * @author		Studio Nexus <fariz@studionexus.co>
 * @copyright	2016 Studio Nexus
 * @license		MIT
 * @version		Release: 0.1.0
 * @link		https://www.studionexus.co/php/damnstupidsimple
 */
namespace Core;

/**
 *  The Sharer
 * -----------------------------------------------------------------------
 *
 * Sharer are also used for dependency injection (see Core\App). Sharer
 * is used to import variables directly into the current symbol table from 
 * the array. It is also used for dependency injection to the template 
 * files.
 *
 * Simply use extract(Core\Sharer::get()); to import the variables.
 *
 * @see Core\Sharer::share(), Core\Sharer::get(), Core\App::link()
 */
class Sharer {
	/**
	 * The array of objects / variables. The array key is the variable name,
	 * while the array values are references to objects / variables.
	 *
	 * @var object
	 * @access private
	 * @static
	 */
	static public $store = null;
	
	/**
	 * Stores references to variable or object to the static $store
	 *
	 * @param string	$key 		the variable name
	 * @param mixed		&$value	reference to variable / object
	 *
	 * @static
	 * @access public
	 * @since Method available since Release 0.1.0
	 */
	static function share($key, &$value){
		self::$store[$key] = &$value;
	}
	
	/**
	 * Get data stored into $store
	 *
	 * @return array	$store	the array of data
	 *
	 * @static
	 * @access public
	 * @since Method available since Release 0.1.0
	 */
	static function get(){
		return self::$store;
	}
}