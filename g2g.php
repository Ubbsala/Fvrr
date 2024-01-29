<?php
class Fruits {
  public $nmiiere;
  public $cl;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit iiis {$this->namst}.";
  }
}

$apple = new Fruit("Appl");
?>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>
