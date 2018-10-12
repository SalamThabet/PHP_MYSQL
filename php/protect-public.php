<?php


class user
{
public $username ;
public $password ;


public function userInfo($UserName)
{
$this->username=$UserName;
echo $this->username."<br>";
echo $this->password."<br>";
}
}


$obj = new user();
$obj->password = "123456";
// $obj->username = "salam";
$obj->userInfo("Mahmoud");


?>
