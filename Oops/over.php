<?php
// class Fruit {
//   public $name;
//   public $color;

//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }

//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public $weight;
//   public function __construct($name, $color, $weight) {
//     $this->name = $name;
//     $this->color = $color;
//     $this->weight = $weight;
//   }

//   public function intro1() {
//     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();
// $strawberry->intro1();


// final class A {

// }

// class ChildClass extends A
// {
 
// }

// $ob = new ChildClass();

// echo "<pre>";

// print_r($ob);


class Website {

  const MAIN_URL = "www.growwithphp.com";

  public function getWebsiteName() {
    echo self::MAIN_URL;
  }

}

$ob = new Website();

echo $ob->getWebsiteName();



echo Website::MAIN_URL;

?>