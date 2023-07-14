<?php
 class fruits
{
    public $name;
    public $color;
    public $weight;
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
       function __construct($name,$color,$weight)
       {
        parent::__construct($name,$color);
        $this->weight=$weight;
       }
      function get()
       {
         echo parent::get() ."the fruit weight is:".$this->weight."kg";  
           } 
    }

$obj =new kiwi("kiwi","green",10);
$obj->get();
