
//inside class

<!-- <?php
class person 
{
    const a="PERSON A";
    function display()
    {
        echo self::a;
    }
}
//$obj=new person();
$obj->display();
?> -->

//outside class
?php
class person
{
const a="PERSON A";
}
echo person::a;
?>

