<?php

class Home extends Controller{
    public function index($a='',$b='',$c=''){
        echo "this is home controller";
    }
    public function add($a='',$b='',$c=''){
        echo "this is home add controller";
        $this->view('home');
    }
}

 