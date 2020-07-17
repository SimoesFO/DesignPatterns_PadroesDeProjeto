<?php
require_once('IQuackBehaviorStrategy.php');

class MuteQuack implements IQuackBehaviorStrategy {

    public function quack() {
        echo "<< Silence >><br />";
    }
}
?>