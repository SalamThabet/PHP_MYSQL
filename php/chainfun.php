<?php


class Person
{
public $name;
public $age;
public $address;


public function SayName()
{
$this->name = "Mahmoud Badawy ";
echo "Hello Mr : " . $this->name . "<br>";
return $this;
}


public function SayAge()
{
$this->age = "25";
echo $this->name . " is : " . $this->age . " years old <br>";
return $this;
}


public function SayAddress()
{
$this->address = "Egypt";
echo $this->name . " is : " . $this->age . " years old and from " . $this->address . "<br>";
return $this;
}


}


$obj = new Person();
/* Chain Selsela */
$obj->SayName()->SayAge()->SayAddress();


?>
