<?php

class Bird {

  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $backyard_tips;
  protected $conservation_id;

  public const CONSERVATION_OPTIONS = [
    1 => 'low',
    2 => 'moderate',
    3 => 'high',
    4 => 'extreme'
  ];

  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? '';
  }

}

?>
