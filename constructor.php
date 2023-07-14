<?php
class person
{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    function get()

    {
        echo $this->name;
    }
    function __destruct()
    {
        echo "<br>{$this->name} object is destroy";
    }
}
$obj1= new person("ABC");
$obj1->get();
?>