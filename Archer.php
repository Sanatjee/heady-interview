<?php
require_once 'interfaces/ActorInterface.php';

class Archer implements ActorInterface{
    private $strength = 1;
    
    public function bombardingStrength(){
        return $this->strength;
    }
}