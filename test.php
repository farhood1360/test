<?php

class Cat {

	private $name;
	private $age = 1;

	function setName($input){
		echo $this->name = $input;  
	}

	function speak () {
		echo "<br/>";
		for($x=1; $x<=5; $x++){
			echo "meow". "<br/>";
	    }
		if ($x=5) {
			echo $this->age += 1 . "<br/>"; 
		}
	}
}


$newCat = new Cat();
$newCat -> setName("fazzy");
$newCat -> speak ();

class Dog extends Cat {

	function setName($input){
		echo parent::setName($input);
	}

	function speak () {
		echo "<br/>";
		for($x=1; $x<=5; $x++){
			echo "bark". "<br/>";
	    }
		if ($x=5) {
			echo $this->age += 1 . "<br/>"; 
		}
	}
}

$newDog = new Dog();
$newDog -> setName("fizzy");
$newDog -> speak ();

?>