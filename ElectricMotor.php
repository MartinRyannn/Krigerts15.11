<?php

require_once 'PropulsionSystem.php';

class electricMotor extends PropulsionSystem {
    public function work() {
        print "Zumm, zumm";
    }
}