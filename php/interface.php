<?php


interface mobile
{


public function pressHome();
// public function SayHello();
// public function SayName($name);
}


class Sony implements mobile
{


public function pressHome(){
echo " press home to Go Sony Home <br>";
}
// public function SayHello(){
// echo " Hello Sony <br>";
// }
// public function SayName($name){
// $this->name = $name;
// echo " My name is ".$this->name." <br>";
// }
// public function SayNo(){
// echo " No Sony <br>";
// }
}


class Apple implements mobile
{


public function pressHome(){
echo " press home to Go Apple Home <br>";
}
public function SayHello(){
echo " Hello Apple <br>";
}
public function SayName($name){
$this->name = $name;
echo " My name is ".$this->name." <br>";
}


}


$obj =new Sony();
$obj->name="Sony";
$obj->pressHome();
$obj->SayHello();
$obj->SayName($obj->name);
/*Say no is only for sony */
$obj->SayNo();
echo " ###################################<br>";


$obj =new Apple();
$obj->name="Apple";
$obj->pressHome();
$obj->SayHello();
$obj->SayName($obj->name);


?>
