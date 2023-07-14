<?php

abstract class person
{
    abstract function display($s);
}
class childA extends person
{
    function display($s)
    {
    echo $s;
}
}
class childB extends person
{
    function display($s)
    {
    echo $s;
}
}
$obj1 =new childA( );
$obj1->display("CHILD A") ;
$obj2 =new childB();
$obj2->display("CHILD B") ;
?>