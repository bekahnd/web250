<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function wheel_details() {
    if($this->wheels == 1) {
      $wheel_info = "1 wheel";
    } else $wheel_info = "{$this->wheels} wheels";
    return $wheel_info;
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

}

class Unicycle extends Bicycle {
  protected $wheels = 1;
  //Bug: unicycle subclass does not have direct access to weight_kg variable so we cannot use that variable in our functions for the Unicycle class
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$cd = new Bicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->year = '2016';

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br>";
echo "Unicycle: " . $uni->wheel_details() . "<br>";

echo "Set weight using kg<br>";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";

echo "Set weight using lbs<br>";
$trek->set_weight_lbs(2);
echo $trek->weight_lbs() . "<br>";
echo $trek->weight_kg() . "<br>";

echo "Set weight using kg<br>";
$uni->set_weight_kg(6);
echo $uni->weight_kg() . "<br>";
echo $uni->weight_lbs() . "<br>";

?>