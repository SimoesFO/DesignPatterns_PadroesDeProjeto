<?php
require_once('IQuackBehaviorStrategy.php');

class QuackNormal implements IQuackBehaviorStrategy {

    public function quack() {
        echo "Quack Quack!!!<br />";
    }
}
?>