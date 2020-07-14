<?php 
abstract class Duck {
    
    private $flyBehavior;
    private $quackBehavior;

    function __construct(FlyBehaviorStrategy $flyBehavior, QuackBehaviorStrategy $quackBehavior) {
        $this->setFlyBehavior($flyBehavior);
    }

    public function setFlyBehavior(FlyBehaviorStrategy $flyBehavior) {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehaviorStrategy $quackBehavior) {
        $this->quackBehavior = $quackBehavior;
    }

    public function executeFly() {
        return $this->flyBehavior->fly();
    }

    public function executeQuack() {
        return $this->quackBehavior->quack();
    }

    public function executeSwim() {
        echo "All Ducks float!<br />";
    }

    abstract public function display();
}
?>