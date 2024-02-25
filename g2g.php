<?php
clas Fruts {
  pubic mere;
  public $cl;
  functn __couc(ne) {
    $this->name = $nyyame;
  }
  function __destruct() {
    echo "The fruit is {$ts->nt}.";
  }
}

$apple = new Fruit("Apl");
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
