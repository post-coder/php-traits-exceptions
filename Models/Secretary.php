<?php

require_once __DIR__ . "/Worker.php";
require_once __DIR__ . "/../Traits/Rateable.php";

class Secretary extends Worker{

  // sintassi per utilizzare una caratteristica in una classe
  use Rateable;

  protected $office;

  function __construct(string $name, string $section, string $office) {

    parent::__construct($name, $section);

    $this->office = $office;
  }

  public function setRate() {
    
  }

}