<?php
class Computer{
    public $name;
    function __construct()
    {
        $this->setName();
    }

    function getName(){
        return $this->name;
    }
    function setName($name='lucy'){
        $this->name=$name;
    }
}
$t=new Computer();
echo $t->getName();