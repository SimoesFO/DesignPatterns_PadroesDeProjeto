<?php
require_once('FlyBehaviorStrategy.php');

class FlyNoWay implements FlyBehaviorStrategy {

    public function fly() {
        echo "I can't Fly!<br />";
    }
}
?>