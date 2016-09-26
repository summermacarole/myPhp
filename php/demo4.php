<?php
class Computer{
    function __toString()
    {
        return '对象无法转换为字符串，请尝试使用print_r';
    }
    function __call($name, $arguments)
    {
        echo $name.'()不存在';
    }
}
$c=new Computer();
echo $c;
$c->go();