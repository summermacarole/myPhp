<?php
/**
 * Created by PhpStorm.
 * User: littlemacarole
 * Date: 2016/9/22
 * Time: 23:54
 * Description:类方法的调用
 */

class Computer{
    private $name;
    private $type;
    function __construct($name='dell',$type='big')
    {
        $this->name=$name;
        $this->type=$type;
    }

    function __set($name, $value)
    {
        $this->$name=$value;
    }
    function __get($name)
    {
        return $this->$name;
    }
    function show(){
        echo $this->name.'<br/>'.$this->type;
    }
}
$c=new Computer();
$c->show();