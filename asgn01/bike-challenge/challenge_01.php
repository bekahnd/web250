<?php

class Bicycle {
  // Properties
  var $brand;
  var $model;
  var $year;
  var $description = 'Used bicycle';
  var $weight_kg = 0.0;

  // Methods
  function name() {
    return $this->brand . " " . $this->model . " " . $this->year . "<br>";
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218 . "<br>";
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

// Instantiate

$bicycle1 = new Bicycle;
$bicycle1->brand = "Trek";
$bicycle1->model = "Emonda SLR";
$bicycle1->year = "2022";

$bicycle1->weight_kg = "8.01";

echo $bicycle1->name();
echo $bicycle1->weight_lbs();

$bicycle2 = new Bicycle;
$bicycle2->brand = "Schwinn";
$bicycle2->model = "GTX 2";
$bicycle2->year = "2018";
$bicycle2->weight_kg = "5.2";

echo $bicycle2->name();
echo $bicycle2->weight_lbs();

$bicycle1->set_weight_lbs(2);
echo $bicycle1->weight_kg . "<br>";
echo $bicycle1->weight_lbs() . "<br>";
?>
