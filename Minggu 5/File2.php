<?php
class cicle implements Shape{

	private $radius;

	public function _construct($radius)
	{
		$this -> radius = $radius;
	}
	public function calcArea()
	{
		return $this -> radius *  $this -> radius * pi(); 
	}
}
?>