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

namespace Controller;

use Core\Request;

class Hello
{
    public function greetWithName($name)
    {
        echo 'Hello, '.$name.'!';
    }

    public function greetForm()
    {
        $name = Request::get('name');
        if ($name == '') {
            echo 'How could you have no name :(';
        } else {
            echo 'Hello, '.$name.'!';
        }
    }
}
