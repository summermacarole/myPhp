<?php
/**
 * Created by PhpStorm.
 * User: littlemacarole
 * Date: 2016/9/22
 * Time: 23:54
 * Description:类的继承，单继承
 */
interface readable{
    function read();
}
interface writable{
    function write();
}
class Computer implements readable,writable{
    function read()
    {
        echo 'I can read';
    }
    function write()
    {
        echo 'I can write also';
    }
}
$c=new Computer();
$c->read();
$c->write();