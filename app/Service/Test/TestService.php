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

namespace Service\Test;

use Model\User;
use Simplyfier\Service\ServiceContainer;

/**
 * Class TestService
 * @package Service\Test
 */
class TestService extends ServiceContainer
{
    /**
     * @return string
     */
    public function hello()
    {
        return 'Hello';
    }

    /**
     * @param $var1
     * @param $operation
     * @param $var2
     * @return float|int|string
     */
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

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getRegisteredUsers()
    {
        return User::all();
    }
}
