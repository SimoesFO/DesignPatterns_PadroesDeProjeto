<?php
require_once('IObservable.php');
require_once('IObserver.php');
require_once('IDisplay.php');
require_once('WeatherStationData.php');

class DisplayTablet implements IObserver, IDisplay {

  public $observable;
  public $temperature;

  public function __construct(IObservable $observable) {

    $this->observable = $observable;
    $this->observable->add($this);
  }

  public function update() {

    if($this->observable instanceof WeatherStationData) {
      $this->temperature = $this->observable->getTemperature();
    }

    $this->display();
  }

  public function display() {

    echo "*** Tablet Information ***<br />";
    echo "Temperature: ".$this->temperature."<br><br><hr />";
  }
}
?>