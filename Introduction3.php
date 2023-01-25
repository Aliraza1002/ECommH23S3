<?php

class Person{
	public $firstName;
	public $LastName;
	protected $age;
	protected $weight;
	protected static $count = 0;

	function __construct($firstName, $LastName, $age, $weight) {
		$this->firstName = $firstName;
		$this->LastName = $LastName;
		$this->age = $age;
		$this->weight = $weight;
		//right way
		self::$count++;

		//wrong
		//$this->count++;


	}

	function __toString() {
		return "$this->firstName $this->LastName is $this->age years old and weighs in at $this->weight pounds";
	}
	public static function count() {

		//wrong
		//return $this->count;

		//right
		return self::$count;
	}
}
echo "There Are ", Person::count(), " people in the program. <br>";

$person = new Person('John', 'Clayton','26', '200');
$person2 = new Person('Jane', 'Porter','27', '145');

echo "$person<br>";
echo "$person2<br>";

echo "There Are ", Person::count(), (Person::count()==1 ? " person": "people "), " people in the program. <br>";

class pugilist extends Person {
	public function fight($other) {
		return ($this->weight>$other->weight ? $this : $other);
	}

}
$puglist = new pugilist('Andre', 'The Giant', 30, 300);
$puglist1 = new pugilist('Conan', 'The barbarian', 30, 250);

$winner = $puglist ->fight($puglist1);
echo "the winner is $winner";