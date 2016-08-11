<?php
namespace Controller;

use Sentry;
use Core\Viewer;
use Core\Response;

class Admin {

    public function __construct(){
        if(Sentry::check() !== true){
            Response::redirect('login');
        }
    }

    public static function redirectToAdminHome(){
        Response::redirect('admin');
    }

    public function displayAdminPage(){
        Viewer::file('/views/admin/home');
    }

}