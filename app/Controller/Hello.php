<?php
namespace Controller;

class Hello {
    public function greetWorld(){
        echo 'Hello world';
    }

    public function greetWithName($name){
        echo ('Hello '. $name);
    }
}