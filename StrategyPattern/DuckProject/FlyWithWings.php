<?php
require_once('FlyBehaviorStrategy.php');

class FlyWithWings implements FlyBehaviorStrategy {

    public function fly() {
        echo "I can fly with my wings!!!<br />";
    }
}
?>