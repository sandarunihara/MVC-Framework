<?php

class Home extends Controller{
    public function index($a='',$b='',$c=''){
        echo "\nthis is home controller";
    }
    public function add($a='',$b='',$c=''){
        $model=new Model;
        $arr["name"]="imandi";
        $arr["age"]="21";
        $result=$model->update(1,$arr);
        $this->view('home');
    }
}

 