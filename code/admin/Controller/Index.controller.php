<?php
namespace struggle\controller;
use struggle as sle;

class IndexController extends Controller{
    public function actionIndex(){
        $d = sle\M('User');
        $this->layout();
    }
    
    public function actionLogin(){
        $this->display();
    }
    
    
    
    
    public function actionUser(){
        $this->layout();
    }





}

