<?php
clas Fruts {
  puc re;
  public $cl;
  functn __cce) {
    $this->na= $ny;
  }
  function __destruct() {
    echo "The friut is {$t->nt}.";
  }
}

$apple = new Fruit("Aprl");
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
