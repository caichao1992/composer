<?php
/**
 * Created by PhpStorm.
 * User: caichao
 * Date: 2018/5/17
 * Time: 10:45
 */
namespace core;
class View{
    //模板文件
    protected $file;
    //模板变量
    protected $vars = [];

    public function make($file){
       $this->file = "view/".$file.".html";
        return $this;
    }
    public function with($name,$value){
        $this->vars[$name]= $value;
        return $this;
    }
    public function __toString(){
        extract($this->vars);
        include $this->file;
        return '';
    }
}