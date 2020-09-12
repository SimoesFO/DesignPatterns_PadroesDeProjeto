<?php
require_once('IObservable.php');
require_once('IObserver.php');
require_once('IDisplay.php');
require_once('WeatherStationData.php');

class DisplayComputer implements IObserver, IDisplay {

  private $observable;
  private $temperature;
  private $color;

  public function __construct(IObservable $observable) {

    $this->observable = $observable;
    $this->subscribe();
    $this->color = '#ff9933';
  }
  

  public function subscribe() {
    $this->observable->add($this);
  }


  public function unsubscribe() {
    $this->observable->remove($this);
    echo "<b style='color:$this->color'>Display Computer unsubscribe</b><br><hr>";
  }


  public function update() {

    if($this->observable instanceof WeatherStationData) {
      $this->temperature = $this->observable->getTemperature();
    }

    $this->display();
  }


  public function display() {
    
    echo "<div style='color: $this->color'>";
    echo "*** Computer Information ***<br />";
    echo "Temperature: $this->temperature °C<br><br>";
    echo "</div><hr />";

    $this->conditionsForUnsubscribe();
  }


  private function conditionsForUnsubscribe() {
    if($this->temperature >= 2 && $this->temperature <= 5) {
      $this->unsubscribe();
    }
  }
}
?>