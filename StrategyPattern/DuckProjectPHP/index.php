<?php
require_once('DuckSimulator.php');

$duckSimulator = new DuckSimulator();

// MALLARD DUCK
$duckSimulator->setDuck( new MallardDuck() );
$duckSimulator->execute();

// RUBBER DUCK
$duckSimulator->setDuck( new RubberDuck() );
$duckSimulator->execute();

// DECOY DUCK
$duckSimulator->setDuck( new DecoyDuck() );
$duckSimulator->execute();
?>