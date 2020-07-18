<?php 
abstract class Duck {
    
    private $flyBehavior;
    private $quackBehavior;

    function __construct(IFlyBehaviorStrategy $flyBehavior, IQuackBehaviorStrategy $quackBehavior) {
        $this->setFlyBehavior($flyBehavior);
        $this->setQuackBehavior($quackBehavior);
    }

    public function setFlyBehavior(IFlyBehaviorStrategy $flyBehavior) {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(IQuackBehaviorStrategy $quackBehavior) {
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