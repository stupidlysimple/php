<?php
namespace Controller;

use Sentry;
use Viewer;
use Response;

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
        Viewer::file('/resources/views/admin/home');
    }

}
