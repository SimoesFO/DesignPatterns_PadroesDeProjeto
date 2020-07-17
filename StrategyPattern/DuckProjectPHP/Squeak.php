<?php
require_once('QuackBehaviorStrategy.php');

class Squeak implements IQuackBehaviorStrategy {

    public function quack() {
        echo "Rubber Duck make Squek Squek...<br />";
    }
}
?>