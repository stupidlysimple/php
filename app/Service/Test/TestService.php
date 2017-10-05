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
namespace Service\Test;

use ServiceContainer;

class TestService extends ServiceContainer
{
    public function hello()
    {
        return 'Hello';
    }

    public function calculate($var1, $operation, $var2)
    {
        if ($operation == 'plus' || $operation == '+') {
            return $var1 + $var2;
        } elseif ($operation == 'minus' || $operation == '-') {
            return $var1 - $var2;
        } elseif ($operation == 'multiply' || $operation == '*') {
            return $var1 * $var2;
        } elseif ($operation == 'divide' || $operation == '/') {
            return $var1 / $var2;
        } else {
            return 'Invalid Operation';
        }
    }

    public function getRegisteredUsers()
    {
        return \Model\User::all();
    }
}
