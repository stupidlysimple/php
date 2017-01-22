<?php
namespace Service\Test;

use ServiceContainer;

class TestService extends ServiceContainer
{
    public function hello()
    {
        return 'Hello';
    }

    public function calculate(int $var1, $operation, int $var2)
    {
        if($operation == 'plus' || $operation == '+')
        {
            return $var1 + $var2;
        }else if($operation == 'minus' || $operation == '-')
        {
            return $var1 - $var2;
        }else if($operation == 'multiply' || $operation == '*')
        {
            return $var1 * $var2;
        }else if($operation == 'divide' || $operation == '/')
        {
            return $var1 / $var2;
        }else{
            return 'Invalid Operation';
        }
    }

    public function getRegisteredUsers()
    {
        return \Model\User::all();
    }
}
