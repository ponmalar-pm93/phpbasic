<?php
class car
{
public $name;

function set_name($n)
{
    $this->name=$n;
}
function get_name()
{
echo $this->name ."<br>";
}

}
$shift=new car();
$shift->set_name("SHIFT");
$shift->get_name();
$bmw=new car();
$bmw->set_name("BMW");
$bmw->get_name();
?>