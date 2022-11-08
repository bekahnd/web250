<?php

class Bird extends DatabaseObject {

  static protected $table_name = 'birds';
  static protected $db_columns = ['id', 'common_name', 'habitat', 'food', 'nest_placement', 'behavior', 'backyard_tips'];

  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $backyard_tips;


  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

//   public function name() {
//     return "{$this->brand} {$this->model} {$this->year}";
//   }
//   public function weight_kg() {
//     return number_format($this->weight_kg, 2) . ' kg';
//   }

//   public function set_weight_kg($value) {
//     $this->weight_kg = floatval($value);
//   }

//   public function weight_lbs() {
//     $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
//     return number_format($weight_lbs, 2) . ' lbs';
//   }

//   public function set_weight_lbs($value) {
//     $this->weight_kg = floatval($value) / 2.2046226218;
//   }

//   public function condition() {
//     if($this->condition_id > 0) {
//       return self::CONDITION_OPTIONS[$this->condition_id];
//     } else {
//       return "Unknown";
//     }
//   }

//   protected function validate() {
//     $this->errors = [];

//     if(is_blank($this->brand)) {
//       $this->errors[] = "Brand cannot be blank.";
//     }
//     if(is_blank($this->model)) {
//       $this->errors[] = "Model cannot be blank.";
//     }
//     return $this->errors;
//   }
 }

?>
