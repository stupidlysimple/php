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
use phpFastCache\CacheManager as CacheManager;

/**
 *  The Cache Facade
 * -----------------------------------------------------------------------
 *
 * The Cache Facade configures the Cache Manager and provides access to the 
 * Cache Manager instance
 *
 */
class Cache {
	
	/**
	 * The instance of phpFastCache\CacheManager
	 * @var object
	 * @access private
	 * @static
	 */
	static private $CacheManager = null;
	
	/**
	 * The configurations
	 * @var array
	 * @access private
	 * @static
	 */
	static private $config = null;
	
	/**
	 * Create and return the instance of phpFastCache\CacheManager 
	 *
	 * @return object	the instance of the Cache Manager if cache enabled
	 *								in the configuration file (config/cache.php), null
	 *								if disabled
	 *
	 * @static
	 * @see Cache::clean()
	 * @access public
	 * @since Method available since Release 0.1.0
	 */
	static function init(){
		
		if(self::$config === null){
			self::$config = require_once(DSS_PATH.'config/cache.php');
		}
		
		if(self::$config['enabled'] === true){
			CacheManager::setup(self::$config['settings']);
			if(self::$CacheManager === null){
				self::$CacheManager = CacheManager::getInstance();
			}
			return self::$CacheManager;
		}else{
			return null;
		}
	}
	
	/**
	 * Clear all cached data
	 *
	 * @static
	 * @access public
	 * @since Method available since Release 0.1.0
	 */
	static function clean(){
		CacheManager::clean();
	}
	
}