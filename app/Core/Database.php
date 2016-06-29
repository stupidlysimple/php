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
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 *  The Database Facade
 * -----------------------------------------------------------------------
 *
 * The Cache Facade configures the Cache Manager and provides access to the 
 * Cache Manager instance
 *
 */
class Database extends Capsule{
	static private $config = null;
	static private $capsule;
	
	/**
	 * Create and return the instance of Illuminate\Database\Capsule\Manager 
	 *
	 * @return object	the instance of the Capsule if database enabled
	 *								in the configuration file (config/database.php), null
	 *								if disabled
	 *
	 * @static
	 * @access public
	 * @since Method available since Release 0.1.0
	 */
	static function connect(){
		
		if(self::$config === null){
			self::$config = include(DSS_PATH.'config/database.php');
		}
			
		if(self::$config['enabled'] === true){
			$capsule = new Capsule;
			$capsule->addConnection(self::$config['settings']); 
			$capsule->bootEloquent();
			$capsule->setAsGlobal();
			self::$capsule = $capsule;
			return self::$capsule;	
		}else{
			return null;
		}
	}
}