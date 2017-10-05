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

use Request;
use Response;
use Sentry;

class User
{
    public function __construct()
    {
        // Always check whether the user is logged in or not to do the action
        if (Sentry::check() !== true) {
            Response::redirect('login');
        }
    }

    public function editUser()
    {
        $id = Request::get('id');
        $first_name = Request::get('first_name');
        $last_name = Request::get('last_name');
        $password = Request::get('password');

        try {
            if ($password == '') {
                // change first_name and last_name
                $user = \Model\User::find($id);
                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->save();
                Response::redirect('admin?edit=success');
            } else {
                // Find the user using the user id
                $user = Sentry::findUserById($id);

                // Get the password reset code
                $resetCode = $user->getResetPasswordCode();

                // Check if the reset password code is valid
                if ($user->checkResetPasswordCode($resetCode)) {
                    // Attempt to reset the user password
                    if ($user->attemptResetPassword($resetCode, $password)) {
                        // change first_name and last_name
                        $user = \Model\User::find($id);
                        $user->first_name = $first_name;
                        $user->last_name = $last_name;
                        $user->save();

                        Response::redirect('admin?edit=success');
                    } else {
                        // Password reset failed
                        echo 'Password reset failed';
                    }
                } else {
                    // The provided password reset code is Invalid
                    echo 'Invalid password reset code';
                }
            }
        } catch (Exception $e) {
            echo 'User was not found.';
        }
    }

    public function deleteUser()
    {
        $id = Request::get('id');

        try {
            $user = \Model\User::find($id);

            if ($user === null) {
                Response::redirect('admin?delete=failed');
            }

            $user->delete();
        } catch (Exception $e) {
            Response::redirect('admin?delete=failed');
        }

        Response::redirect('admin?delete=success');
    }
}
