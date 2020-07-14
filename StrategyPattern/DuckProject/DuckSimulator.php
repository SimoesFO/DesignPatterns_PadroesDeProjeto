<?php
require_once('MallardDuck.php');
require_once('RubberDuck.php');
require_once('DecoyDuck.php');

class DuckSimulator {

    private $duck;

    public function __construct(Duck $duck = null) {

        $this->duck = $duck;
    }

    public function getDuck() {
        return $this->duck;
    }

    public function setDuck(Duck $duck) {
        $this->duck = $duck;
    }
    
    public function execute() {

        $this->startProgram();
        $this->getDuck()->display();
        $this->getDuck()->executeFly();
        $this->getDuck()->executeQuack();
        $this->getDuck()->executeSwim();
        $this->endProgram();
    }

    public function startProgram() {
        echo 'Initializing Program<br />';
    }

    public function endProgram() {
        echo "Finishing Program<br /><hr /><br />";
    }
}
?>