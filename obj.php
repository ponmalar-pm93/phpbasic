<?php
class fruits
{
    public $name;
    public $color;

    function set_name($n)
    {
        $this->name = $n;
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

$apple = new fruits();
$apple->set_name("APPLE");
echo "1 Fruit Name: " . $apple->get_name() . "<br>";
$apple->set_color("RED");
echo "1 Fruit color: " . $apple->get_color() . "<br>";
?>
