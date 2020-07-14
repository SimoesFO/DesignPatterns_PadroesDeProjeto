<?php
require_once('QuackBehaviorStrategy.php');

class QuackNormal implements QuackBehaviorStrategy {

    public function quack() {
        echo "Quack Quack!!!<br />";
    }
}
?>