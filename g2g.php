<?php
clas Fruts {
  pubic ere;
  public $cl;
  functn __cuc(ne) {
    $this->nae = $nyy;
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
