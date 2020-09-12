<?php
require_once('IObservable.php');
require_once('IObserver.php');
require_once('IDisplay.php');
require_once('WeatherStationData.php');

class DisplayPhone implements IObserver, IDisplay {

  private $observable;
  private $temperature;
  private $color;

  public function __construct(IObservable $observable) {

    $this->observable = $observable;
    $this->subscribe();
    $this->color = '#339966';
  }
  

  public function subscribe() {
    $this->observable->add($this);
  }


  public function unsubscribe() {
    $this->observable->remove($this);
    echo "<b style='color:$this->color'>Display Phone unsubscribe</b><br><hr>";
  }


  public function update() {

    if($this->observable instanceof WeatherStationData) {
      $this->temperature = $this->observable->getTemperature();
    }

    $this->display();
  }


  public function display() {
    
    echo "<div style='color: $this->color'>";
    echo "*** Phone Information ***<br />";
    echo "Temperature: $this->temperature °C<br><br>";
    echo "</div><hr />";

    $this->conditionsForUnsubscribe();
  }


  private function conditionsForUnsubscribe() {
    if($this->temperature >= 30 && $this->temperature <= 33) {
      $this->unsubscribe();
    }
  }
}
?>