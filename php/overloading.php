<?php


class Foo {
function myFoo() {
return "Foo";
}
}


class Bar extends Foo {
function myFoo() {
return "Bar";
}
}


$foo = new Foo;
$bar = new Bar;
echo($foo->myFoo()); //"Foo"
echo($bar->myFoo()); //"Bar"



class Addition {
// function compute($first, $second) {
// return $first+$second;
// }


// function compute($first, $second, $third) {
// return $first+$second+$third;
// }
}



class abs
{
public function volume($arg1=null, $arg2=null, $arg3=null)
{
if($arg1 == null && $arg2 == null && $arg3 == null)
{
echo "function has no arguments. <br>";
}


else if($arg1 != null && $arg2 != null && $arg3 != null)
{
$volume=$arg1*$arg2*$arg3;
echo "volume of a cuboid ".$volume ."<br>";
}
else if($arg1 != null && $arg2 != null)
{
$area=$arg1*$arg2;
echo "area of square = " .$area ."<br>";
}
else if($arg1 != null)
{
$volume=$arg1*$arg1*$arg1;
echo "volume of a cube = ".$volume ."<br>";
}


}


}


$obj=new abs();
echo "For no arguments. <br>";
$obj->volume();
echo "For one arguments. <br>";
$obj->volume(3);
echo "For two arguments. <br>";
$obj->volume(3,4);
echo "For three arguments. <br>";
$obj->volume(3,4,5);
