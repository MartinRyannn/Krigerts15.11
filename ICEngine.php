<?php

require_once 'PropulsionSystem.php';

class ICEngine extends PropulsionSystem {
    
function __construct(public $size, private $cylinderCount, $power, $fuelType, $efficiency){
    parent::__construct($power, $fuelType, $efficiency);
}
        
    

    public function work() {
        print "Brumm brumm";
    }
}
