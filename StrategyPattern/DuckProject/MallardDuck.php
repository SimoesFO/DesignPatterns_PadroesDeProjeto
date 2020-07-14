<?php
require_once('Duck.php');
require_once('FlyWithWings.php');
require_once('Quack.php');

class MallardDuck extends Duck {

    public function __construct() {
        $this->setFlyBehavior( new FlyWithWings() );
        $this->setQuackBehavior( new QuackNormal() );
    }

    public function display() {
        echo "I'm Mallard Duck!<br />";
    }
}
?>