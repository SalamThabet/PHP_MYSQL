<?php


abstract class person
{
public $name="Mebo";

abstract public function SayHello();
abstract public function SayName($NAME);
abstract protected function SayPassword();


}


class Egyption extends person
{
public function SayHello(){
echo "Hello ".$this->name."<br>";
}
public function SayName($NAME){
$this->name=$NAME;
echo "My name ".$this->name."<br>";
}
// public function SayPassword(){
// echo "Password hhhhhhhhhh "."<br>";
// }
}


$obj = new Egyption();
$obj->name ="Karim";
$obj->SayHello();
$obj->SayName("Mahmoud Badawy");
$obj->SayPassword();
?>
