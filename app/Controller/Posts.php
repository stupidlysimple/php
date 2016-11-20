<?php
namespace Controller;

use Sentry;
use Core\Viewer;
use Core\Response;

class Posts {

    public function __construct(){
        if(Sentry::check() !== true){
            Response::redirect('login');
        }
    }

    public function doAddPost(){

    }
}