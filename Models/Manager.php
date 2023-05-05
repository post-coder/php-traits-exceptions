<?php

require_once __DIR__ . "/Worker.php";
require_once __DIR__ . "/../Traits/Rateable.php";

class Manager extends Worker {

  // sintassi per utilizzare una caratteristica in una classe
  use Rateable;

  protected $badge;
  

  function __construct(string $name, string $section, string $badge) {
    
    parent::__construct($name, $section);

    $this->badge = $badge;

  }

}