<?php
require_once('IFlyBehaviorStrategy.php');

class FlyNoWay implements IFlyBehaviorStrategy {

    public function fly() {
        echo "I can't Fly!<br />";
    }
}
?>