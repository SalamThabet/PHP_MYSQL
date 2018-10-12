<?php 

/**
 * 
 */
class mobile 
{
	
	public $id = "12";
	public $name = "saladddddm";

	const num=5;

	mobile::num;

	public function add(){
		echo "Add function";
	}
}
$sumsong=new mobile();
$apple=new mobile();


$sumsong->add();


$sumsong->id = "55";
// $sa->id = 5;
$sumsong->name = 98;
// echo "<pre>";
// echo $sa->id ."---" . $sa->name;
// echo "</pre>";
echo "<pre>";
echo var_dump($sumsong);
// echo var_dump($sumsong) . " ".$this->name ="salamsalam";

echo "</pre>";
echo "<pre>";
echo var_dump($apple);
echo "</pre>";