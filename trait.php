<?php
trait message1
{
    function msg1()
    {
        echo "HELLO<br>";
    }
}
class welcome1
{
    use message1;
}
$obj1 =new welcome1();
$obj1->msg1();
?>
