<?php


class person
{
public $name;
public $address;
public $age;
public $Email;
public $password;


final public function personInfo($mail ,$pass )
{
echo " My name is : " . $this->name . "<br>";
echo " My Address is : " . $this->address . "<br>";
echo " My age is : " . $this->age . "<br>";
echo " My Address is : " . $mail . "<br>";
echo " My age is : " . $pass. "<br>";
}


}


class Egyption extends person
{
public function personInfo($mail ,$pass )
{
echo " My Address is : " . $mail . "<br>";
echo " My age is : " . $pass. "<br>";
}
}


$obj = new person();
$obj->name = "Mahmoud";
$obj->address = "Egypt";
$obj->age = 23;
$obj->personInfo("mahmoud@gmail.com", "146464886");


echo "<br>############## overriding here ###############<br>";
$obj = new Egyption();
$obj->personInfo("mahmoud@gmail.com", "146464886");
?>
