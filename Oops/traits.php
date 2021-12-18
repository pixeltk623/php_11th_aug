<?php 
	
	trait Message {
		public function greeting() {
			echo "Good Morning";
		}
	}

	trait Message1 {
		public function greeting1() {
			echo "Good Morning";
		}
	}

	trait Message2 {
		public function greeting2() {
			echo "Good Morning";
		}
	}

	trait Message3 {
		public function greeting3() {
			echo "Good Morning";
		}
	}

	class A  {
		
		use Message, Message1;
	
	}


$obj = new A;

$obj->greeting();
$obj->greeting1();


?>