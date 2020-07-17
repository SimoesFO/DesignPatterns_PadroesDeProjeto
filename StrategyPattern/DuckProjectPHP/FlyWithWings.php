<?php
require_once('IFlyBehaviorStrategy.php');

class FlyWithWings implements IFlyBehaviorStrategy {

    public function fly() {
        echo "I can fly with my wings!!!<br />";
    }
}
?>