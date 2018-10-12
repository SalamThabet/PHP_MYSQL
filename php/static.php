<?php


class Person
{
static $name;
static $age;
static $address;


static function SayHello()
{
// self::$name = Person::$name;
echo "Hello " . Person::$name . " from Function <br>";
Person::$name = "Sa3d El yateem ";
echo "Hello " . Person::$name . " from Function <br>";
}
}


/* Static probrties is Global and Does not need Object to use */
Person::$name = "Mahmoud";
echo Person::$name . "<br>";
Person::SayHello();
echo Person::$name . "<br>";


?>
