<?php


class user
{
public $username ;
private $password ;


// public function userInfo($UserName)
// {
// $this->username=$UserName;
// echo $this->username."<br>";
// echo $this->password."<br>";
// }
// }


// $obj = new user();
// $obj->password = "123456";
// $obj->userInfo("Mahmoud");
public function userInfo($UserName , $PassWord)
{
$this->username=$UserName;
$this->password=$PassWord;
echo $this->username."<br>";
echo $this->password."<br>";
}
}


$obj = new user();
// $obj->password = "123456";

$obj->userInfo("Mahmoud" ,"123456");



?>
