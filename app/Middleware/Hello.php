<?php
/**
 * Created by PhpStorm.
 * User: farizluqman
 * Date: 30/09/2017
 * Time: 3:38 PM.
 */

namespace Middleware;

use Response;
use Router;

/**
 * Class Hello.
 */
class Hello
{
    public static function filter()
    {
        // Always redirect this route to /login
        if (Router::getCurrentRoute() == '/route/to/be/filtered') {
            Response::redirect('../../../login')->with([
                'login_message'=> 'This route have been filtered by the Hello middleware',
                'type'         => 'alert-warning',
            ]);
        }
    }
}
