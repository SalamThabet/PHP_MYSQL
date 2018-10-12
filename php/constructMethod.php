<?php


class Mobile
{
public $name;
public $ram;
public $price;


public function __construct()
{
echo "The Object has been created <br>";
}


}


$obj =new Mobile();
// $obj->__construct();

?>
<?php


class Mobile2
{
public $name;
public $ram;
public $price;


public function __construct2($n , $r , $p)
{
$this->name=$n;
$this->ram=$r;
$this->price=$p;
echo "Mobile Name : ".$this->name. "<br>";
echo "Mobile Ram : ".$this->ram. "<br>";
echo "Mobile Price : ".$this->price. "<br>";
}


}


$obj =new Mobile2("Sony","2 Gb","3500 L.E");


?>
