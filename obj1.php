<?php
class fruits
{
    public $name;
    public $color;
    function set_name($n)
    {
$this->name  = $n;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($c)
    {
$this->color = $c;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple =new fruits();
$apple->set_name("APPLE");
echo "1 fruit:" .$apple->get_name(). "<br>";
$apple->set_color("RED");
echo("1 fruits color:".$apple->get_color()."<br>");

$orange = new fruits();
$orange->set_name("ORANGE");
echo "2 fruit:" .$orange->get_name(). "<br>";
$orange->set_color("ORANGE");
echo("2 fruits color:".$orange->get_color()."<br>");
?>