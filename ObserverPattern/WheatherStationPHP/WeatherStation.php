<?php
require_once('WeatherStationData.php');
require_once('DisplayTablet.php');

class WeatherStation {

  public $wheatherStationData;

  public function __construct(WeatherStationData $weatherStationData) {
    $this->weatherStationData = $weatherStationData;
  } 

  public function main() {

    while(true) {

      $raffleTemperature = $this->random_float(0, 40);
      $this->weatherStationData->setDatas($raffleTemperature);
      
      ob_flush();
      flush();
      sleep(2);
    }
  }

  function random_float ($min,$max) {
    return ($min+lcg_value()*(abs($max-$min)));
  }
}

$weatherStationData = new WeatherStationData();
$displayTablet = new DisplayTablet($weatherStationData);


$weatherStation = new WeatherStation($weatherStationData);
$weatherStation->main();

?>