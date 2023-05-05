<?php

trait Rateable {
  
  protected $rate = 1;
  protected $ratingDates = [];


  // -------------------

  public function setRate(int $rate) {

    if($rate >= 1 && $rate <= 5) {

      $this->rate = $rate;

    } else {

      // sintassi per lanciare un errore
      throw new Exception("Fratè, cosa stai facendo? Devi darmi un numero intero tra 1 e 5.");

    }

  }

  public function getRate() {
    return $this->rate;
  }

}