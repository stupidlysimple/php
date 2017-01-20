<?php
namespace Controller;

use Sentry;
use Core\Viewer;
use Core\Response;

class User {

    public function __construct(){
        // Always check whether the user is logged in or not to do the action
        if(Sentry::check() !== true){
            Response::redirect('login');
        }
    }
    
    public function editUser(){
        $id = Response::get('id');
        $first_name = Response::get('first_name');
        $last_name = Response::get('last_name');
        $password = Response::get('password');
        try
        {
            if($password == ''){
                // change first_name and last_name
                $user = \Model\User::find($id);
                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->save();
                Response::redirect('admin?edit=success');
            }else{
                // Find the user using the user id
                $user = Sentry::findUserById($id);

                // Get the password reset code
                $resetCode = $user->getResetPasswordCode();

                // Check if the reset password code is valid
                if ($user->checkResetPasswordCode($resetCode))
                {
                    // Attempt to reset the user password
                    if ($user->attemptResetPassword($resetCode, $password))
                    {
                        // change first_name and last_name
                        $user = \Model\User::find($id);
                        $user->first_name = $first_name;
                        $user->last_name = $last_name;
                        $user->save();

                        Response::redirect('admin?edit=success');
                    }
                    else
                    {
                        // Password reset failed
                        echo 'Password reset failed';
                    }
                }
                else
                {
                    // The provided password reset code is Invalid
                    echo 'Invalid password reset code';
                }
            }
        }
        catch (Exception $e)
        {
            echo 'User was not found.';
        }
    }

    public function deleteUser()
    {
        $id = Response::get('id');
        try 
        {
            $user = \Model\User::find($id);
            
            if($user === null){
                Response::redirect('admin?delete=failed');
            }
            
            $user->delete();
        }catch(Exception $e)
        {
            Response::redirect('admin?delete=failed');
        }
        
        Response::redirect('admin?delete=success');
    }
}