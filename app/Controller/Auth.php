<?php
namespace Controller;
use Sentry;
use Core\Response;
use Core\Viewer;

class Auth {
    public function __construct(){
        
    }

    public function displayRegisterPage(){
        Viewer::file('views/auth/register');
    }

    public function displayLoginPage(){
        Viewer::file('views/auth/login');
    }

    public function doAuthenticate(){
        try{
            // Login credentials
            $credentials = array(
                'email'    => Response::get('email'),
                'password' => Response::get('password'),
            );
            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);

        }catch (\Cartalyst\Sentry\Users\LoginRequiredException $e){
            echo 'Login field is required.';

        }catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e){
            echo 'Password field is required.';

        }catch (\Cartalyst\Sentry\Users\WrongPasswordException $e){
            echo 'Wrong password, try again.';

        }catch (\Cartalyst\Sentry\Users\UserNotFoundException $e){
            echo 'User was not found.';

        }catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e){
            echo 'User is not activated.';

        }finally{
            if(Sentry::check() === true){
                Admin::redirectToAdminHome();
            }else{
                echo ' Login failed!';
            }
        }
    }

    public function doRegister(){
        try{
            $user = Sentry::register(array(
                'email'    => Response::get('email'),
                'password' => Response::get('password'),
            ), $activate = true);

        }catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
            echo 'Login field is required.';

        }catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
            echo 'Password field is required.';

        }catch (Cartalyst\Sentry\Users\UserExistsException $e){
            echo 'User with this login already exists.';

        }finally{
            if($user){
                echo('Register successful. Redirecting to login page in 3 second...');
                Response::redirect('login', 3);

            }
        }
    }

    public function doLogout(){
        Sentry::logout();
        Response::redirect('login');

    }

}