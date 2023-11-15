<?php

abstract class PropulsionSystem {
  

    function __construct(public $power, public $fuelType, protected $efficiency){
        
    }

    abstract public function work();
}
