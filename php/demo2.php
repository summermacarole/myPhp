<?php
/**
 * Created by PhpStorm.
 * User: littlemacarole
 * Date: 2016/9/22
 * Time: 23:54
 * Description:类的继承，单继承
 */
class A{
    public $name='jack';
    final function show(){
        echo 'hello';
        echo 'my name is '.$this->name;
    }
}
class B extends A{
    public $name='lucy';
    function show1(){
        echo 'my name is '.$this->name;
    }
    function f(){
        $this->show();
//        parent::show();
    }
}
$b=new B();
echo $b->f();
//class A{
//    function __construct()
//    {
//        echo '父类的构造器';
//    }
//
//    private function get1(){
//        echo 'get1';
//    }
//    protected function get2(){
//        echo 'get2';
//    }
//    public function get3(){
//        echo 'get3';
//    }
//}
//class B extends A{
//    function __construct()
//    {
//        $this->get2();
//        $this->get3();
//    }
//}
//$b=new B();
//$b->get3();
//class Par{
//    public $n1='n1';
//    function get1(){
//        echo 'am is n1';
//    }
//}
//class Son extends Par{
//    public $n2='n2';
//    function get2(){
//        echo $this->n2;
//    }
//}
//$s=new Son();
//echo $s->n1;