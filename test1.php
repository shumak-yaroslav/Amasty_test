<?php 

	class First {

		public $classname;
		public $letter;

		public function __construct($classname, $letter) {
			$this->classname = $classname;
			$this->letter = $letter;
		}

		public function getClassname() {
			echo $this->classname;
		}

		public function getLetter() {
			echo $this->letter;
		}

	}

	class Second extends First {

	}

	$name1 = new First("First", "A");
	$name2 = new Second("Second", "B");
	$name1->getClassname();
	echo "<br>";
	$name1->getLetter();
	echo "<br>";
	$name2->getClassname();
	echo "<br>";
	$name2->getLetter();

?>
