<?php
require_once('QuackBehaviorStrategy.php');

class MuteQuack implements QuackBehaviorStrategy {

    public function quack() {
        echo "<< Silence >><br />";
    }
}
?>