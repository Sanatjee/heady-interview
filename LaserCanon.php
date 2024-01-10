<?php

require_once 'interfaces/ActorInterface.php';

class LaserCanon implements ActorInterface{
    private $strength = 4;
    
    public function bombardingStrength(){
        return $this->strength;
    }
}