<?php
class fruits
{
    public $name;
    public $color;
    function __construct($n,$c)
    {
        $this->name=$n;
        $this->color=$c;
        
    }
    function get()
    {
        echo"the fruit is {$this->name}and color is {$this->color}<br>";
}
}
class kiwi extends fruits
    {
       function child()
       {
        echo "i am a fruit of kiwi";
       } 
    }
$obj =new kiwi("kiwi","green");
$obj->get();
$obj->child();