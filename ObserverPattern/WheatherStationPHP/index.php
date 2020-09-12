<?php
require_once('WeatherStationData.php');
require_once('DisplayTablet.php');
require_once('DisplayPhone.php');
require_once('DisplayComputer.php');

class WeatherStation {

  public $wheatherStationData;

  public function __construct(WeatherStationData $weatherStationData) {
    $this->weatherStationData = $weatherStationData;
  } 


  public function main() {

    $counter = 1;
    while(true) {
      echo "<div>$counter - Updating...</div><hr />";

      $raffleTemperature = $this->random_float(0, 40);
      $this->weatherStationData->setDatas($raffleTemperature);
      
      ob_flush();
      flush();
      sleep(2);
      $counter++;
    }
  }


  function random_float ($min,$max) {
    return ($min+lcg_value()*(abs($max-$min)));
  }
}


$weatherStationData = new WeatherStationData();
$displayTablet = new DisplayTablet($weatherStationData); //$displayTablet->unsubscribe();
$displayPhone = new DisplayPhone($weatherStationData);
$displayComputer = new DisplayComputer($weatherStationData);


$weatherStation = new WeatherStation($weatherStationData);
$weatherStation->main();
?>