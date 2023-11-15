<?php 

require_once 'PropulsionSystem.php';
require_once 'ICEngine.php';
require_once 'Tire.php';

class Car{
    public $color;
    public $brand;
    public $releaseYear;
    public $mileage;
    public $propulsionSystem;
    public $tires = [];
    private $propulsionSystems = [];


   

    function __construct($color, $brand, $releaseYear, $mileage, $tireSize, $tirePressure, $type)
    {
      $this->color = $color;
      $this->brand = $brand;
      $this->releaseYear = $releaseYear;
      $this->mileage = $mileage;
      $this->type = $type;
  
      for ($i = 0; $i < 4; $i++) {
        $this->tires[] = new Tire($tireSize, $tirePressure); 
      }

   
      if($type === 'Hybrid'){
        $this->propulsionSystems[] = new ICEngine(1,1,650, "Gasoline", 0.99);
        $this->propulsionSystems[] = new electricMotor(1, "Electric", 0.8);
      }else if ($type === "Electric"){
        $this->propulsionSystems[] = new electricMotor(1, "Electric", 0.8);
      }else if ($type === "Gasoline" || $type === "Diesel"){
        $this->propulsionSystems[] = new ICEngine(1,1,650, "Gasoline", 0.99);
      }else{
        print "Car not supported";
      }


    }

    public function move(){

    }
    public function makeNoise(){
        
    }
}

