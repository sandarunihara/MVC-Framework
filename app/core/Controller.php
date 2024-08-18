<?php

class Controller{
    public function view($name){
        $filename='../app/controllers/'.$name.'.view.php';
        if(file_exists($filename)){
            require $filename;
        }else{
            $filename='../app/controllers/404.view.php'; 
            require $filename;
        }
    }
}