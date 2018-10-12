<?php


class car
{
public $WheelsNum=4;
public $DoorsNum=4;
public $speedsNum=5;


public function matualFunc()
{
return "ehna 3arbiat 7elwa <br>";
}


}


class HammerCar extends car
{
public $ScreensNum = 5;
public $Color ="Red";
public $MaxSpeed="250 km/h";


public function DiffrentFunc()
{
return "ana 3arbia Hammer <br>";
}
}


$obj = new HammerCar();
echo "------------ Inherted prop and Methods-----------------"."<br>";
echo "the number of wheels = ".$obj->WheelsNum."<br>";
echo "the number of Doors = ".$obj->DoorsNum."<br>";
echo "the number of speeds = ".$obj->speedsNum."<br>";
echo "the Matual or inherted functions = ".$obj->matualFunc()."<br>";


echo "------------ HammerCar prop and Methods-----------------"."<br>";
echo "the number of Screens = ".$obj->ScreensNum."<br>";
echo "the Color of Hammer = ".$obj->Color."<br>";
echo "the Max Speed of Hammer = ".$obj->MaxSpeed."<br>";
echo "the function of Hammer = ".$obj->DiffrentFunc()."<br>";
?>

