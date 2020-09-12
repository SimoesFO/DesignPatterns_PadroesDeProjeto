<?php
require_once('IObservable.php');
require_once('IObserver.php');

class WeatherStationData implements IObservable {

  private $listObservers;
  private $temperature;

  public function __construct() {
    $this->listObservers = array();
    $this->temperature = 0;
  }


  public function add(IObserver $observer) {
    $this->listObservers[] = $observer;
  }


  public function remove(IObserver $observer) {
    foreach ($this->listObservers as $key => $obs) {
      if($obs == $observer) {
        unset($this->listObservers[$key]);
        return;
      }
    }
  }


  public function notify() {
    foreach ($this->listObservers as $observer) {
      $observer->update();
    }
  }


  public function getTemperature() {
    return $this->temperature;
  }


  public function setTemperature(float $temperature) {
    $this->temperature = $temperature;
    $this->notify();
  }


  public function setDatas(float $temperature = null) {
    
    $diffTemperature = abs($this->temperature - $temperature);
    if($diffTemperature >= 1) {
      $this->setTemperature(round($temperature));
    }
  }
}
?>