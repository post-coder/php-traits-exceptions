<?php

class Worker {
  protected $name;
  protected $section;

  function __construct(string $name, string $section) {
    $this->name = $name;
    $this->section = $section;
  }
}