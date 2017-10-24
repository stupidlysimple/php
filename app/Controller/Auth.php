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

use Cartalyst\Sentry\Users;
use Cartalyst\Sentry\Facades\Native\Sentry;
use Simplyfier\Http\Request;
use Simplyfier\Http\Response;

/**
 * Class Auth.
 */
class Auth
{
    private static $successRedirectURL = 'admin';

    public static function check()
    {
        if (Sentry::check() !== true) {
            Response::redirect('login');
        }
    }

    public static function authenticate()
    {
        try {
            // Login credentials
            $credentials = [
                'email'    => Request::get('email'),
                'password' => Request::get('password'),
            ];

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
        } catch (Users\LoginRequiredException $e) {
            Response::redirect('login')->with([
                'login_message'=> 'Login credentials not supplied',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\PasswordRequiredException $e) {
            Response::redirect('login')->with([
                'login_message'=> 'Password field is required',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\WrongPasswordException $e) {
            Response::redirect('login')->with([
                'login_message'=> 'Wrong password, try again.',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\UserNotFoundException $e) {
            Response::redirect('login')->with([
                'login_message'=> 'User not found.',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\UserNotActivatedException $e) {
            Response::redirect('login')->with([
                'login_message'=> 'User is not activated.',
                'type'         => 'alert-danger',
            ]);
        } finally {
            if (Sentry::check() === true) {
                Response::redirect(self::$successRedirectURL)->with([
                    'login_message'=> 'Login successful.',
                    'type'         => 'alert-success',
                ]);
            } else {
                Response::redirect('login')->with([
                    'login_message'=> 'Unable to login',
                    'type'         => 'alert-danger',
                ]);
            }
        }
    }

    public static function register()
    {
        try {
            $user = Sentry::register([
                'email'      => Request::get('email'),
                'password'   => Request::get('password'),
                'first_name' => Request::get('first_name'),
                'last_name'  => Request::get('last_name'),
            ], $activate = true);
        } catch (Users\LoginRequiredException $e) {
            Response::redirect('register')->with([
                'login_message'=> 'Login credentials not supplied',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\PasswordRequiredException $e) {
            Response::redirect('register')->with([
                'login_message'=> 'Password field is required',
                'type'         => 'alert-danger',
            ]);
        } catch (Users\UserExistsException $e) {
            Response::redirect('register')->with([
                'login_message'=> 'User with that login already exist.',
                'type'         => 'alert-danger',
            ]);
        } catch (\Exception $e) {
            Response::redirect('register')->with([
                'login_message'=> 'Login is not successful.',
                'type'         => 'alert-danger',
            ]);
        } finally {
            if ($user) {
                Response::redirect('login')->with([
                    'login_message'=> 'Registration successful. You can now login.',
                    'type'         => 'alert-success',
                ]);
            }
        }
    }

    public static function logout()
    {
        Sentry::logout();
        Response::redirect('login')->with([
            'login_message'=> 'Logout successful.',
            'type'         => 'alert-success',
        ]);
    }
}
