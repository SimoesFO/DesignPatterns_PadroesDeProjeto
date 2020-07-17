<?php
require_once('Duck.php');
require_once('FlyNoWay.php');
require_once('Squeak.php');

class RubberDuck extends Duck {

    public function __construct() {
        $this->setFlyBehavior( new FlyNoWay() );
        $this->setQuackBehavior( new Squeak() );
    }

    public function display() {
        echo "I'm Decoy Duck!<br />";
    }
}
?>