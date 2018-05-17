<?php
/**
 * Created by PhpStorm.
 * User: caichao
 * Date: 2018/5/16
 * Time: 17:42
 */
namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index{
    protected $view;

    public function __construct(){
        $this->view = new View();
    }
    public function show(){
       return $this->view->make('index')->with('qw',"12");
    }
    public function login(){
        dd($_SESSION);
        return $this->view->make('login');
    }
    public function code(){
        header("content-type:image/jpeg");
        $builder = new  CaptchaBuilder;
        $builder->build(100,30);
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }
}