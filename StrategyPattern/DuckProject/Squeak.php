<?php
require_once('QuackBehaviorStrategy.php');

class Squeak implements QuackBehaviorStrategy {

    public function quack() {
        echo "Rubber Duck make Squek Squek...<br />";
    }
}
?>