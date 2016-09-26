<?php
    function __autoload($className){
    echo $className;
        require $className.'.class.php';
    }
    $c=new Computer();
    echo $c->show();